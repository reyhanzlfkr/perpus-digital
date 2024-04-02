<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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

<body>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <h6 class="font-weight-bolder mb-0">Anime Raiburari</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         
        </div>
      
                <!-- Conditionally show Login and Register links based on authentication status -->
                @guest
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><b>Login</a></b>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><b>Register</a></b>
                        </li>
                    </ul>
                @endguest

                @auth
                    <!-- You can add authenticated user-specific links here if needed -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"><b>DASHBOARD</a></b>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link"><b>Logout</button></b>
                            </form>
                        </li>
                    </ul>
                @endauth
            </div>
        </div>
    </nav>
    
    <!-- Your content here -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
<div class="p-3 mb-2 bg-white">
    <div class="container">
        <div class="row">
            
            @foreach ($buku as $b)
            <div class="col-md-3"> <!-- Adjust the column size based on your preference -->
                <div class="card mb-3">
                    <img src="{{ asset('storage/'.$b->foto) }}" style="max-width:100%; max-height:100%; height:350px; width:300px;" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title">{{$b->judul}}</h5>
                        <p class="card-text">{{$b->deskripsi}}</p>
                        <a href="{{route('buku.show', $b->id)}}" class="btn btn-primary">Detail Buku</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>