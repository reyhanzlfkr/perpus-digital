@extends('layouts.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body bg-white">
                    <h1 class="h3 font-weight-bold mb-4">Edit Data Kategori</h1>
                </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                <input type="text" value="{{$kategori->nama_kategori}}" name="nama_kategori" class="form-control"
                                    id="judul" aria-describedby="emailHelp">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>   
@endsection