<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use Illuminate\Http\Request;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produks::all();

        //fungsi compact sama seperti 
        // retrun view ('produk/index', ['produk' => $produk])
        return view('produk/index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk/create')
    ;}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $produk = new Produks();
        // $produk->nama_barang = $request->nama_barang;
        // $produk->stok_barang = $request->stok_barang;
        // $produk->harga_barang = $request->harga_barang;
        // $produk->jenis_barang = $request->jenis_barang;

        // $produk->save();

        // Produks::create([
        //     'nama_barang'=> $request->nama_barang,
        //     'stok_barang'=> $request->stok_barang,
        //     'harga_barang'=> $request->harga_barang,
        //     'jenis_barang'=> $request->jenis_barang,

        // ]);
        $request->validate([
            'nama_barang' => 'required',
            'stok_barang' => 'required|numeric|min:0',
            'harga_barang' => 'required|numeric|min:0',
            'jenis_barang' => 'required'
        ]);

        Produks::create($request->all());
        return redirect('/produk')->with('pesan', 'Data produk berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produks  $produks
     * @return \Illuminate\Http\Response
     */
    public function show(Produks $produks)
    {
        
        return view('produk/detail', compact('produks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produks  $produks
     * @return \Illuminate\Http\Response
     */
    public function edit(Produks $produks)
    {
        return view('produk/edit', compact('produks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produks  $produks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produks $produks)
    {
        $request->validate([
            'nama_barang' => 'required',
            'stok_barang' => 'required|numeric|min:0',
            'harga_barang' => 'required|numeric|min:0',
            'jenis_barang' => 'required'
        ]);
        
        Produks::where('id', $produks->id)
                ->update([
                    'nama_barang' => $request->nama_barang,
                    'stok_barang' => $request->stok_barang,
                    'harga_barang' => $request->harga_barang,
                    'jenis_barang' => $request->jenis_barang
                ]);
        return redirect('/produk')->with('pesan', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produks  $produks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produks $produks)
    {
        Produks::destroy($produks->id);
        return redirect('/produk')->with('pesan', 'Data produk sudah di hapus');
    }
}
