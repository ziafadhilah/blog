<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <title>@yield('title') : SMK Negeri 2 Bandung</title>
    <style>
        .zoom {
            transition: transform .1s;
            /* Animation */
            /* margin: 0 auto; */
        }

        .zoom:hover {
            transform: scale(0.9);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        :root{
            --animate-duration: 800ms;
            --animate-delay: 0.9s;
        }
    </style>
</head>

<body>
    <!-- <div class="container">
        <div class="d-flex bd-highlight">
            <div class="p-2 bd-highlight">
                <div class="btn-group dropdown">
                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        Masuk/Daftar
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/login')}}">Masuk</a>
                        <a class="dropdown-item" href="{{url('/register')}}">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a href="{{url('/')}}">
                <div class="zoom">
                    <img src="{{asset('img/logo.png')}}" width="60" height="60">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <div class="zoom">
                        <a class="nav-item nav-link" href="{{url('/')}}">
                            <h5 style="color: #f5ab35;">PROFIL SEKOLAH</h5>
                        </a>
                    </div>
                    <div class="zoom">
                        <a class="nav-item nav-link" href="{{url('/kegiatan')}}">
                            <h5 style="color: #f5ab35;">KEGIATAN</h5>
                        </a>
                    </div>
                    <div class="zoom">
                        <a class="nav-item nav-link" href="{{url('/kompetensi')}}">
                            <h5 style="color: #f5ab35;">KOMPETENSI</h5>
                        </a>
                    </div>
                    <div class="zoom">
                        <a class="nav-item nav-link" href="{{url('/guru')}}">
                            <h5 style="color: #f5ab35;">MANAJEMEN</h5>
                        </a>
                    </div>
                </div>
            </div>
    </nav>

    @yield('container')

    <div class="card-footer mt-3 bg-dark">
        <div class="container">
            <h5 style="color: #f5ab35;">&copy 2020 SMK Negeri 2 - All right reserved!</h5>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>