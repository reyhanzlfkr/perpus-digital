@extends('layouts.master')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-white">
                        <h1 class="h3 font-weight-bold mb-4">Data Buku</h1>
                        <div class="mb-4">
                            <a href="{{ route('buku.create') }}" class="btn btn-outline-dark">
                                <i class="far fa-plus-square"></i>
                                Tambah Data Buku
                            </a>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Sinopsis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($buku as $b)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{asset('storage/'.$b->foto) }}" alt="Foto Buku" width="100">
                                            </td>
                                            
                                        <td>{{ $b->judul }}</td>
                                        <td>{{ $b->penulis }}</td>
                                        <td>{{ $b->penerbit }}</td>
                                        <td>{{ $b->tahun_terbit }}</td>
                                        <td>{{ $b->sinopsis }}</td>
                                        <td>
                                            <a href="{{ route('buku.edit', $b->id) }}" i class="fas fa-pen"  style="margin-right: 20px">
                                                Edit
                                            </a>
                                        <a href="{{ route('buku.hapus', $b->id) }}" i class="fas fa-trash" style="color: #ff0000;"> 
                                            Hapus
                                        </a>
                                        </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data buku.</td>
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