@extends('layouts.master')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-white">
                        <h1 class="h3 font-weight-bold mb-4">Data Kategori</h1>
                        <div class="mb-4">
                            <a href="{{ route('kategori.create') }}" class="btn btn-primary" >
                                
                               + Tambah Kategori
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="bg-primary text-white">
                                <tr>
                                    <th class="px-4 py-2">Nama Kategori</th>
                                    <th class="col-3 px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kategori as $k)
                                    <tr>
                                        <td class="px-4 py-2">{{ $k->nama_kategori }}</td>
                                        <td>
                                            <a href="{{ route('kategori.edit', $k->id) }}" a class="btn btn-info" i class="fas fa-pen"  style="margin-right: 20px">
                                                Edit
                                            </a>
                                            <a href="{{ route('kategori.hapus', $k->id) }}" a class="btn btn-danger" i class="fas fa-trash" >
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-4 py-2 text-center">Tidak ada data kategori.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection