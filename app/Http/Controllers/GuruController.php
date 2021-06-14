<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtGuru = Guru::all();
        return view('guru.data-guru', compact('dtGuru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.input-guru');
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
            'nama.required'          => 'Nama tidak boleh kosong',
            'nip.required'           => 'NIP tidak boleh kosong',
            'jeniskelamin.required'  => 'Jenis tidak boleh kosong',
            'alamat.required'        => 'Alamat tidak boleh kosong',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        Guru::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jeniskelamin' => $request->jeniskelamin,
            'alamat' => $request->alamat,

        ]);
        alert()->success('Berhasil!', 'Data Guru Baru Berhasil Disimpan');
        return redirect('data-guru');
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
    public function edit($nip)
    {
        $gur = Guru::findorfail($nip);
        return view('guru.edit-guru', compact('gur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $nip
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
            'nama.required'          => 'Nama tidak boleh kosong',
            'nip.required'           => 'NIP tidak boleh kosong',
            'jeniskelamin.required'  => 'Jenis kelamin tidak boleh kosong',
            'alamat.required'        => 'Alamat tidak boleh kosong',

        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $gur = Guru::findorfail($nip);
        $gur->update($request->all());

        alert()->success('Berhasil!', 'Data Guru Berhasil Diubah');
        return redirect('data-guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nip)
    {

        $gur = Guru::findorfail($nip);
        $gur->delete();

        alert()->info('Data Berhasil Dihapus');
        return back();
    }
}
