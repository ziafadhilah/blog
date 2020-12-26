@extends('layouts/main')
@section('title', 'Home')
@section('container')
<style>
    .card-img {
        max-width: 13rem;
    }
</style>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="color: aqua;" class="animate__animated animate__fadeInLeft">SELAMAT DATANG DI</h1>
            <p>
                <h5 style="color: #f5ab35;" class="animate__animated animate__fadeInRight">WEBSITE SMK NEGERI 2 KOTA BANDUNG</h5>
            </p>
        </div>
        <div class="carousel-item active">
            <img src="{{asset('img/1.jpg')}}" class="d-block w-100 animate__animated animate__fadeIn animate__delay-1s" alt="first">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/2.jpg')}}" class="d-block w-100 animate__animated animate__fadeIn animate__delay-1s" alt="second">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/3.jpg')}}" class="d-block w-100 animate__animated animate__fadeIn animate__delay-1s" alt="third">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-5 col-md-5 mt-3">
            <img src="{{asset('img/hasan-iskandar.png')}}" width="100%">
        </div>
        <div class="col-sm-7 col-md-7 mt-3">
            <h1>SAMBUTAN KEPALA SEKOLAH</h1>
            <p class="text-muted">
                <h5>
                    Assalamualaikum Warrahmatullahi Wabarrakatuh.
                </h5>
            </p>
            <p class="text-muted">
                Selamat datang di website SMK Negeri 2 Bandung.
            </p>
            <p class="text-muted">
                Di SMKN 2 Bandung setiap siswa memiliki hak untuk berprestasi dan mendapatkan pelayanan yang baik. Karena kami memandang ini semua adalah amanah yang akan kami pertanggung jawabkan di hadapan Allah SWT. Tentu hal ini semakin terasa mudah dengan adanya kerjasama dari para orang tua siswa dalam menjalankan program sekolah.
            <br>
                Sekali lagi kami ucapkan selamat datang di SMKN 2 Bandung. Marilah bekerjasama agar anak-anak kita dapat berkembang dengan baik sehingga tumbuh menjadi generasi yang berakhlakul karimah dan cerdas.
            </p>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <div class="card border-info">
                <div class="card-header text-white bg-primary">
                    <center>
                        <h3 class="text-white">
                            <i class="fa fa-book"></i> Buku Pilihan
                        </h3>
                    </center>
                </div>
                <div class="card-body">
                    <div class="card-deck">
                        <div class="card">
                            <center>
                                <div class="zoom">
                                    <img class="card-img-top mt-3" src="{{asset('img/book-cover/ruby-book.jpg')}}" alt="Card image cap" style="width: 75%;">
                                </div>
                            </center>
                            <div class="card-body">
                                <h5 class="card-title">Ruby Programming Book</h5>
                                <p class="card-text">Ini adalah deskripsi Ruby programming book</p>
                            </div>
                            <div class="card-footer text-right">
                                <small class="text-muted">
                                    <a class="btn btn-outline-primary" href="">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </small>
                            </div>
                        </div>
                        <div class="card">
                            <center>
                                <div class="zoom">
                                    <img class="card-img-top mt-3" src="{{asset('img/book-cover/python.jpg')}}" alt="Card image cap" style="width: 75%;">
                                </div>
                            </center>
                            <div class="card-body">
                                <h5 class="card-title">Python Programming Book</h5>
                                <p class="card-text">Ini adalah deskripsi Python programming book</p>
                            </div>
                            <div class="card-footer text-right">
                                <small class="text-muted">
                                    <a class="btn btn-outline-primary" href="">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </small>
                            </div>
                        </div>
                        <div class="card">
                            <center>
                                <div class="zoom">
                                    <img class="card-img-top mt-3" src="{{asset('img/book-cover/php.jpg')}}" alt="Card image cap" style="width: 75%;">
                                </div>
                            </center>
                            <div class="card-body">
                                <h5 class="card-title">PHP Programming Book</h5>
                                <p class="card-text">Ini adalah deskripsi PHP programming book</p>
                            </div>
                            <div class="card-footer text-right">
                                <small class="text-muted">
                                    <a class="btn btn-outline-primary" href="">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-deck">
                        <div class="card">
                            <center>
                                <div class="zoom">
                                    <img class="card-img-top mt-3" src="{{asset('img/book-cover/linux.jpg')}}" alt="Card image cap" style="width: 75%;">
                                </div>
                            </center>
                            <div class="card-body">
                                <h5 class="card-title">Linux Notes for Professionals</h5>
                                <p class="card-text">Ini adalah deskripsi Linux Notes for Professionals</p>
                            </div>
                            <div class="card-footer text-right">
                                <small class="text-muted">
                                    <a class="btn btn-outline-primary" href="">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </small>
                            </div>
                        </div>
                        <div class="card">
                            <center>
                                <div class="zoom">
                                    <img class="card-img-top mt-3" src="{{asset('img/book-cover/python.jpg')}}" alt="Card image cap" style="width: 75%;">
                                </div>
                            </center>
                            <div class="card-body">
                                <h5 class="card-title">Python Programming Book</h5>
                                <p class="card-text">Ini adalah deskripsi Python programming book</p>
                            </div>
                            <div class="card-footer text-right">
                                <small class="text-muted">
                                    <a class="btn btn-outline-primary" href="">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </small>
                            </div>
                        </div>
                        <div class="card">
                            <center>
                                <div class="zoom">
                                    <img class="card-img-top mt-3" src="{{asset('img/book-cover/php.jpg')}}" alt="Card image cap" style="width: 75%;">
                                </div>
                            </center>
                            <div class="card-body">
                                <h5 class="card-title">PHP Programming Book</h5>
                                <p class="card-text">Ini adalah deskripsi PHP programming book</p>
                            </div>
                            <div class="card-footer text-right">
                                <small class="text-muted">
                                    <a class="btn btn-outline-primary" href="">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection