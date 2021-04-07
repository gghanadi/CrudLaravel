@extends('layout/main')

@section('tittle', 'Detail produk')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Produk </h1>
            <a href="/produk/create" class="btn btn-primary my-3">+ Tambahkan produk</a>
            @if (session('pesan'))
                <div class="alert alert-success">
                    {{ session('pesan') }}
                </div>
            @endif
            <ul class="list-group">
            @foreach($produk as $produk )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$produk->nama_barang}}
                    <a href="/produk/{{$produk->id}}" class="badge bg-info rounded-pill"> Detail </a>
                </li>
            @endforeach
            </div>
        </div>
    </div>
@endsection