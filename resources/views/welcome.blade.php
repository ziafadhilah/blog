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
            <img src="{{asset('img/slider-1.png')}}" class="d-block w-100" alt="first">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/slider-2.png')}}" class="d-block w-100" alt="second">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/slider-3.jpg')}}" class="d-block w-100" alt="third">
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
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="tab mt-3">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-justified" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active text-dark" data-toggle="tab" href="#ch">Choco</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" data-toggle="tab" href="#co">Coffee</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-dark" data-toggle="tab" href="#tea">Tea</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div id="ch" class="container tab-pane active">
                        <div class="card card-body mt-3" style="max-width: 100%;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{asset('img/halu1.jpeg')}}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Lemon Tea</h5>
                                        <p class="card-text"><small class="text-muted">Harga Rp. 15000.-</small></p>
                                        <p class="card-text">Lemon tea deskripsi</p>
                                        <a href="" class="btn btn-outline-primary">Contoh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="co" class="container tab-pane fade">
                        <div class="card card-body mt-3" style="max-width: 100%;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{asset('img/halu1.jpeg')}}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Lemon Tea</h5>
                                        <p class="card-text"><small class="text-muted">Harga Rp. 15000.-</small></p>
                                        <p class="card-text">Lemon tea deskripsi</p>
                                        <a href="" class="btn btn-outline-primary">Contoh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tea" class="container tab-pane fade">
                        <div class="card card-body mt-3" style="max-width: 100%;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{{asset('img/halu1.jpeg')}}" class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Lemon Tea</h5>
                                        <p class="card-text"><small class="text-muted">Harga Rp. 15000.-</small></p>
                                        <p class="card-text">Lemon tea deskripsi</p>
                                        <a href="" class="btn btn-outline-primary">Contoh</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection