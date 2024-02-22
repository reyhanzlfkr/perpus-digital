@extends('layouts.master')

@section('content')
        <div class="container">
            <nav class="navbar navbar-dark bg-primary">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        
                            alt="">
                        <b> LaraPost</b>
                    </a>
                </div>
            </nav>
            <br>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Edit Post
                    </div>
                    <div class="card-body">
                        <form action="{{route('buku.update', $buku->$id) }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">judul</label>
                                <input type="text" value="{{$buku->judul}}" name="judul" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">penulis</label>
                                <textarea name="penulis" rows="10" class="form-control">{{$buku->penulis}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">penerbit</label>
                                <textarea name="penerbit" rows="10" class="form-control">{{$buku->penerbit}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">tahun terbit</label>
                                <textarea name="tahun_terbit" rows="10" class="form-control">{{$buku->tahun_terbit}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection