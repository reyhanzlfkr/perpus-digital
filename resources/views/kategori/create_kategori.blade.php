@extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg">
                    <div class="card-body bg-white">
                        <h1 class="h3 font-weight-bold mb-4">Formulir Input kategori</h1>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <p class="text-success">{{ session('success') }}</p>
                        @endif

                        <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label for="nama_kategori" class="form-label">Nama Kategori:</label>
                                <input type="text" name="nama_kategori" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection