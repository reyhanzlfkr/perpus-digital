<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('user.user_index',compact('users', 'roles'));
    }

    public function create()
    {
        $roles = Role::all(); //Mengambil semua role untuk form
        return view('user.user_create', compact('roles')); //tampilkan form create user
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'roles' => 'required|array', //Memastikan input roles adalah array
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $user->assignRole($request->roles); // Memberikan role yang dipilih kepada user

        return redirect()->route('users.index')->with('succes', 'User Berhasil Ditambahkan');
    }

    //koding edit
    public function edit($id)
    {
        $users = User::find($id);
        $roles = Role::all();
        return view('user.edit_user',compact('users', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'roles' => 'required|array',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        $user->syncRoles($request->roles);

        return redirect()->route('/user')->with('succes', 'User Berhasil Diupdate');
    }

    public function hapus($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('/user');
    }

   
}
