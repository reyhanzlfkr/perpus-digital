@extends('layouts.master')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">List Buku</div>

                    <div class="card-body">
                        

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                   
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($buku as $b)
                                    <tr>
                                        <td>{{ $b->judul }}</td>
                                        <td>{{ $b->penulis }}</td>
                                        <td>{{ $b->penerbit }}</td>
                                        <td>{{ $b->tahun_terbit }}</td>
                                        <td>
                                            <a href="{{ route('buku.edit', $b->id) }}" class="btn btn-primary">
                                                Edit
                                            </a>
                                        <a href="{{ route('buku.hapus', $b->id) }}" class="btn btn-danger">
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
                        <div class="mb-4">
                            <a href="{{ route('buku.create') }}" class="btn btn-primary">
                                + Tambah Data Buku
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection