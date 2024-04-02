<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('soft/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('soft/assets/img/favicon.png') }}">
  <title>
    Reyhan Zulfikar
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset ('soft/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{asset ('soft/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset ('soft/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset ('soft/assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<div class="container-fluid">
    <div class="row">
        <div class="d-flex justify-content-center">
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
                            <th blockquete >Sinopsis: </th>
                            <td >{{$buku->sinopsis}}</td>
                        
                        </tr>
                    </table>
                    <a href="/" a class="btn btn-primary"> Kembali </a> 
                </div>
            </div>
        </div>
    </div>
</div>