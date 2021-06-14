<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKaryawan = Karyawan::all();
        return view('karyawan.data-karyawan', compact('dtKaryawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.input-karyawan');
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
        $rules = [
            'nama'          => 'required|string',
            'nip'           => 'required|string',
            'jeniskelamin'  => 'required|string',
            'alamat'        => 'required|string',

        ];

        $messages = [
            'nama.required'          => 'Nama Karyawan tidak boleh kosong',
            'nip.required'           => 'NIP tidak boleh kosong',
            'jeniskelamin.required'  => 'Jenis Kelamin tidak boleh kosong',
            'alamat.required'        => 'Alamat tidak boleh kosong',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        Karyawan::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,

        ]);
        alert()->success('Berhasil!', 'Data Karyawan Baru Berhasil Disimpan');
        return redirect('data-karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nip)
    {
        $kar = Karyawan::findorfail($nip);
        return view('karyawan.edit-karyawan', compact('kar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nip)
    {
        $rules = [
            'nama'          => 'required|string',
            'nip'           => 'required|string',
            'jeniskelamin'  => 'required|string',
            'alamat'        => 'required|string',

        ];

        $messages = [
            'nama.required'          => 'Nama Karyawan tidak boleh kosong',
            'nip.required'           => 'NIP tidak boleh kosong',
            'jeniskelamin.required'  => 'Jenis Kelamin tidak boleh kosong',
            'alamat.required'        => 'Alamat tidak boleh kosong',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $kar = Karyawan::findorfail($nip);
        $kar->update($request->all());

        alert()->success('Berhasil!', 'Data Karyawan Berhasil Diubah');
        return redirect('data-karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nip)
    {
        $kar = Karyawan::findorfail($nip);
        $kar->delete();

        alert()->info('Data Berhasil Dihapus');
        return back();
    }
}
