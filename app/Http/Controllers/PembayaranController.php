<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->all());
        if ($request) {
            alert()->success('Berhasil!', 'Data Berhasil Ditemukan');
            $dt_pembayaran = pembayaran::with('siswa')->where('nis', 'LIKE', '%' . $request->cari . '%')->get();;
        } else {
            alert()->error('Gagal!', 'Data Tidak Ditemukan');
            $dt_pembayaran = pembayaran::all();
        }
        return view('pembayaran.tagihan-pembayaran', compact('dt_pembayaran'));
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
        $rules = [
            'kelas'                => 'required|string',
            'nis'                  => 'required|string',
            'jenis_pembayaran'     => 'required|string',
            'kode_pembayaran'      => 'required|string',
            'tgl_pembayaran'       => 'required|date',
            'bukti'                => 'required',
            'total_pembayaran'     => 'required|string',

        ];

        $messages = [

            'kelas.required'                => 'Kelas tidak boleh kosong',
            'nis.required'                  => 'NIS tidak boleh kosong',
            'jenis_pembayaran.required'     => 'Jenis Pembayaran tidak boleh kosong',
            'kode_pembayaran.required'      => 'Kode Pembayaran tidak boleh kosong',
            'tgl_pembayaran.required'       => 'Tanggal Pembayaran tidak boleh kosong',
            'bukti.required'                => 'Bukti Pembayaran tidak boleh kosong',
            'total_pembayaran.required'     => 'Total Pembayaran tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $gambar = $request->bukti;
        $namafile = $gambar->getClientOriginalName();
        $dt_upload = new pembayaran;
        $dt_upload->nama = $request->nama;
        $dt_upload->kelas = $request->kelas;
        $dt_upload->nis = $request->nis;
        $dt_upload->jenis_pembayaran = $request->jenis_pembayaran;
        $dt_upload->kode_pembayaran = $request->kode_pembayaran;
        $dt_upload->tgl_pembayaran = $request->tgl_pembayaran;
        //$dt_upload->tgl_pembayaran = \Carbon\Carbon::now();
        $dt_upload->bukti_pembayaran = $namafile;
        $dt_upload->total_pembayaran = $request->total_pembayaran;

        $gambar->move(public_path() . '/bukti_pembayaran', $namafile);
        $dt_upload->save();
        alert()->success('Berhasil!', 'Data Transaksi Pembayaran Berhasil Disimpan');
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
        $pem = Pembayaran::findorfail($id);
        return view('pembayaran.edit-pembayaran', compact('pem'));
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
        $rules = [
            'kelas'                => 'required|string',
            'nis'                  => 'required|string',
            'jenis_pembayaran'     => 'required|string',
            'kode_pembayaran'      => 'required|string',
            'tgl_pembayaran'       => 'required|date',
            'bukti_pembayaran'                => 'required',
            'total_pembayaran'     => 'required|string',

        ];

        $messages = [

            'kelas.required'                => 'Kelas tidak boleh kosong',
            'nis.required'                  => 'NIS tidak boleh kosong',
            'jenis_pembayaran.required'     => 'Jenis Pembayaran tidak boleh kosong',
            'kode_pembayaran.required'      => 'Kode Pembayaran tidak boleh kosong',
            'tgl_pembayaran.required'       => 'Tanggal Pembayaran tidak boleh kosong',
            'bukti_pembayaran.required'                => 'Harap masukkan ulang bukti pembayaran | Bukti Pembayaran tidak boleh kosong',
            'total_pembayaran.required'     => 'Total Pembayaran tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $gambar = $request->bukti;
        $namafile = $gambar->getClientOriginalName();
        $pem = Pembayaran::findorfail($id);
        $pem->update($request->all());

        alert()->success('Berhasil!', 'Data Tansaksi Pembayaran Berhasil Diubah');
        return redirect('input-pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pem = Pembayaran::findorfail($id);
        $pem->delete();

        alert()->info('Data Berhasil Dihapus');
        return back();
    }
}
