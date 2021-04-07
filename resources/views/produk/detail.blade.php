@extends('layout/main')

@section('tittle', 'Daftar produk')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
            <h1 class="mt-3">Detail produk </h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$produks->nama_barang}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$produks->jenis_barang}}</h6>
                        <p class="card-text">Rp {{$produks->harga_barang}}</p>
                        <p class="card-text">Jumlah tersedia = {{$produks->stok_barang}}</p>
                        <a href="/produk/{{$produks->id}}/edit" class="btn btn-primary my-3" > Edit </a>
                        <form class="d-inline" action="{{$produks->id}}" method="post" >
                            @method('delete')
                            @csrf
                                <button type="submit" class="btn btn-danger"> Hapus </button>
                        </form>
                        <a href="/produk" class="btn btn-dark my-3">Back</a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
@endsection