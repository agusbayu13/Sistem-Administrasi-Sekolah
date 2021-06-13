<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtsiswa=siswa::all();
        return view('siswa.data-siswa', compact('dtsiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.input-siswa');
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
        Siswa::create([
            'nis' => $request ->nis,
            'id_kelas' => $request ->id_kelas,
            'nama' => $request ->nama,
            'alamat' => $request ->alamat,
            'jenis_kelamin' => $request ->jenis_kelamin
        ]);
        alert()->success('Berhasil!', 'Data Siswa Baru Berhasil Disimpan');
        return redirect('data-siswa');
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
    public function edit($nis)
    {
        $dtsiswa=siswa::findorfail($nis);
        return view('siswa.edit-siswa',compact('dtsiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nis)
    {
        $dtsiswa=siswa::findorfail($nis);
        $dtsiswa->update($request->all());
        alert()->success('Berhasil!', 'Data Siswa Baru Berhasil Update');
        return redirect('data-siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
        $sis = siswa::findorfail($nis);
        $sis->delete();

        
    }
    
}
