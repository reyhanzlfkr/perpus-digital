<!DOCTYPE html>
<html lang="en"> 
       
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="p-3 mb-2 bg-white">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4"> <!-- Adjust the column size based on your preference -->
                <div class="card mb-4">
                <img src="{{ asset('storage/'.$buku->foto) }}" class="rounded" alt="...">
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body ">
                    <table class="table table-hover">
                        <tr>
                            <th nowrap >Judul Buku: </th>
                            <td >{{$buku->judul}}</td>
                        </tr>
                        <tr>
                            <th nowrap >Penulis: </th>
                            <td >{{$buku->penulis}}</td>
                        </tr>
                        <tr>
                            <th nowrap >Penerbit: </th>
                            <td >{{$buku->penerbit}}</td>
                        </tr>
                        <tr>
                            <th nowrap >Tahun Terbit: </th>
                            <td >{{$buku->tahun_terbit}}</td>
                        </tr>
                        <tr>
                            <th nowrap >Sinopsis: </th>
                            <td >{{$buku->sinopsis}}</td>
                        
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>