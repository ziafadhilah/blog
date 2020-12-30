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
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <title>@yield('title') : SMK Negeri 2 Bandung</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
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
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="">
                        <h5 style="color: #f5ab35;"></h5>
                    </a>
                <div class="dropdown mt-2">
                    <h5 class="nav-item nav-link" style="color: white; cursor:pointer;">Profil Sekolah</h5>
                    <div class="dropdown-content">
                        <a class="menu" href="{{url('/public/sejarah')}}">Sejarah</a> <p></p>
                        <a class="menu" href="{{url('/public/sambutan')}}">Sambutan Kepala Sekolah</a> <p></p>
                        <a class="menu" href="">Program Unggulan</a> <p></p>
                        <a class="menu" href="">Prestasi Sekolah</a>
                    </div>
                </div>
                <div class="dropdown mt-2 dropright">
                    <h5 class="nav-item nav-link" style="color: white; cursor:pointer;">Kompetensi</h5>
                    <div class="dropdown-content">
                        <a class="menu" href="{{url('/public/tkisr')}}">TKI & SR</a> <p></p>
                        <a class="menu" href="{{url('/public/mesin')}}">Teknik Mesin</a>
                    </div>
                </div>
                <div class="dropdown mt-2 dropright">
                    <h5 class="nav-item nav-link" style="color: white; cursor:pointer;">Kegiatan</h5>
                    <div class="dropdown-content">
                        <a class="menu" href="{{url('/public/akademik')}}">Akademik</a> <p></p>
                        <a class="menu" href="">Kerjasama</a>
                    </div>
                </div>
                <div class="dropdown mt-2">
                    <h5 class="nav-item nav-link" style="color: white; cursor:pointer;">Layanan</h5>
                    <div class="dropdown-content">
                        <a class="menu" href="{{url('/public/akademik')}}">Akademik</a> <p></p>
                        <a class="menu" href="">Kerjasama</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    @yield('container')

    <div class="card-footer mt-3 bg-primary">
        <div class="container">
            <h5 style="color: white;">&copy 2020 SMK Negeri 2 - All right reserved!</h5>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>