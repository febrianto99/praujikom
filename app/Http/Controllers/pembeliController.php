<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;
use Session;
use Auth;

class pembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('admin.pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli = pembeli::all();
        return view('admin.pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new Pembeli();
        $pembeli->pembeli_id = $request->pembeli_id;
        $pembeli->pembeli_merk = $request->pembeli_merk;
        $pembeli->pembeli_type = $request->pembeli_type;
        $pembeli->pembeli_warna_pilihan = $request->pembeli_warna_pilihan;
        $pembeli->pembeli_harga = $request->pembeli_harga;
        $pembeli->pembeli_gambar = $request->pembeli_gambar;

        $pembeli->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan pembeli <b>$pembeli->pembeli_id</b>!"
        ]);
        return redirect()->route('pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
