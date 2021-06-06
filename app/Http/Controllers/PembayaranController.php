<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt_pembayaran = pembayaran::all();
        return view('pembayaran.input-pembayaran', compact('dt_pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembayaran.input-pembayaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $gambar=$request->bukti;
        $namafile=$gambar->getClientOriginalName();
        $dt_upload=new pembayaran;
            $dt_upload->nama = $request->nama;
            $dt_upload->kelas = $request->kelas;
            $dt_upload->nis = $request->nis;
            $dt_upload->jenis_pembayaran = $request->jenispembayaran;
            $dt_upload->kode_pembayaran = $request->total;
            $dt_upload->tgl_pembayaran = $request->tanggal;
            $dt_upload->bukti_pembayaran = $namafile;
            $dt_upload->total_pembayaran = $request->total;
            
        $gambar->move(public_path().'/bukti_pembayaran', $namafile);
        $dt_upload->save();
        return redirect('input-pembayaran');
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
