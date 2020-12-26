@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="text-align:center">Daftar Buku</h1>
@stop

@section('content')
<div class="table-responsive-md">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col" width="10px">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Kategori</th>
                <th scope="col" width="100px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $list)
            <tr>
                <th scope="row">1</th>
                <td>{{$list->nama}}</td>
                <td>{{$list->category_id}}</td>
                <td>{{$list->author_id}}</td>
                <td>
                    <a href="">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href="">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop