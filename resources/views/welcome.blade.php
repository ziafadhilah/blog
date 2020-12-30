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
            <div class="container mt-3">
                <div class="jumbotron">
                    <h1 class="display-4 animate__animated animate__fadeInDown">
                        Selamat Datang di Website SMK Negeri 2
                    </h1>
                    <hr class="my-4">
                    <p class="lead animate__animated animate__fadeInUp"><i>SMK 2 BISA, SMK NEGERI 2 JUARA!</i></p>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="{{asset('img/1.jpeg')}}" class="d-block w-100 animate__animated animate__fadeIn animate__delay-1s" alt="first">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/2.jpeg')}}" class="d-block w-100 animate__animated animate__fadeIn animate__delay-1s" alt="second">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/3.jpeg')}}" class="d-block w-100 animate__animated animate__fadeIn animate__delay-1s" alt="third">
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
    <div class="card border-info">
        <div class="card-header text-center bg-primary">
            <div class="zoom">
                <h3 class="text-white"><i class="fa fa-cogs"></i> Visi & Misi SMK Negeri 2 Bandung</h3>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">Visi</h4>
            <p class="card-text">
                <h5> Sebagai lembaga pendidikan kejuruan profesional dan berwawasan lingkungan yang mampu menghasilkan lulusan yang bertaqwa, cerdas, kompeten dan kompetetif.</h5>
            </p>
            <p>
                <h4 class="card-title">Misi</h4>
            </p>
            <p class="card-text">
                <h5 style="text-align: justify;">
                    <i class="fa fa-angle-double-right"></i> Mengembangkan sikap kewirausahaan yang jujur dan bertanggung jawab. <p></p>
                    <i class="fa fa-angle-double-right"></i> Memberikan mutu layanan pendidikan kejuruan yang profesional dan berkualitas. <p></p>
                    <i class="fa fa-angle-double-right"></i> Meningkatkan kebekerjaan lulusan serta dapat mengembangkan sikap profesional sesuai bidang keahliannya. <p></p>
                    <i class="fa fa-angle-double-right"></i> Menghasilkan lulusan yang mampu memilih karir, berkompeten, produktif, dan dapat mengembangkan diri. <p></p>
                    <i class="fa fa-angle-double-right"></i> Menciptakan lingkungan sekolah yang kondusif. <p></p>
                    <i class="fa fa-angle-double-right"></i> Menjalin kerjasama dengan dunia usaha/industri serta instansi terkait.
                </h5>
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
                            <i class="fa fa-newspaper-o"></i> Penerimaan Peserta Didik Baru (PPDB)
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
<div class="container mt-3">
    <div class="tilu">
        <div class="column zoom">
            <img src="{{asset('img/1.jpeg')}}" class="responsive">
        </div>
        <div class="column zoom">
            <img src="{{asset('img/2.jpeg')}}" class="responsive">
        </div>
        <div class="column zoom">
            <img src="{{asset('img/3.jpeg')}}" class="responsive">
        </div>
    </div>
</div>
<br>
@endsection