@extends('layout/main')

@section('tittle', 'Form tambah produk')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="mt-3">Form tambah produk </h1>
                <form method="post" action="/produk">
                @csrf
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" id="nama_barang" placeholder="masukan nama produk" name="nama_barang" value="{{old('nama_barang')}}">
                        @error('nama_barang')<div class="invalid-feedback">{{$message}}</div>@enderror

                    </div>
                    <div class="mb-3">
                        <label for="stok_barang" class="form-label">Stok barang</label>
                        <input type="text" class="form-control @error('stok_barang') is-invalid @enderror" id="stok_barang" placeholder="____" name="stok_barang" value="{{old('stok_barang')}}">
                        @error('stok_barang')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga_barang" class="form-label">Harga barang</label>
                        <input type="text" class="form-control @error('harga_barang') is-invalid @enderror" id="harga_barang" placeholder="____" name="harga_barang" value="{{old('harga_barang')}}">
                        @error('harga_barang')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="jenis_barang" class="form-label">Jenis Produk</label>
                        <input type="text" class="form-control @error('jenis_barang') is-invalid @enderror" id="jenis_barang" placeholder="masukan Jenis produk nya" name="jenis_barang" value="{{old('jenis_barang')}}">
                        @error('jenis_barang')<div class="invalid-feedback">{{$message}}</div>@enderror
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
             </div>   
        </div>
@endsection