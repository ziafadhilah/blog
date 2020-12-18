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
        <div class="carousel-item active">
            <img src="{{asset('img/1.jpg')}}" class="d-block w-100" alt="first">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/2.jpg')}}" class="d-block w-100" alt="second">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/3.jpg')}}" class="d-block w-100" alt="third">
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