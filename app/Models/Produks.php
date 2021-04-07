<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Produks extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'produk';
    public $timestamps = false;
    protected $fillable =  ['nama_barang', 'stok_barang', 'harga_barang', 'jenis_barang'];
}
