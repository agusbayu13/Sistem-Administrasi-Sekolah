<?php

namespace App\Http\Controllers;

use Alert;
use DateTime;
use Validator;
use DateTimeZone;
use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{

    public function index()
    {
        return view('presensi.presensi-masuk');
    }

    public function keluar()
    {
        return view('presensi.presensi-keluar');
    }

    public function store(Request $request)
    {
        $rules = [
            'nip'            => 'required|string',
        ];

        $messages = [
            'nip.required'   => 'Harap masukkan NIP Anda terlebih dahulu',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();
        if ($presensi) {
            //alert()->question('Title', 'Lorem Lorem Lorem');
            //Alert::question('Question Title', 'Question Message');
            alert()->error('Gagal!', 'Maaf Anda Sudah Melakukan Presensi Masuk Hari Ini !!');
            return redirect('presensi-masuk');
        } else {
            Presensi::create([
                'user_id'=> auth()->user()->id,
                'tgl' => $tanggal,
                'jammasuk' => $localtime,
                'nip' => $request->nip,
            ]);
        }
        return redirect('presensi-masuk')->with('success', 'Presensi Masuk Berhasil !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function halamanrekap()
    {
        return view('presensi.halaman-rekap-guru');
    }


    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        //orderBy untuk mengurutkan data
        $presensi = Presensi::with('user')->whereBetween('tgl', [$tglawal, $tglakhir])->orderBy('tgl', 'asc')->get();
        return view('presensi.rekap-guru', compact('presensi'));
    }

    public function presensipulang()
    {
       
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id','=',auth()->user()->id],
            ['tgl', '=', $tanggal],
        ])->first();

        $dt = [
            'jamkeluar' => $localtime,
            'jamkerja' => date('H:i:s', strtotime($localtime) - strtotime($presensi->jammasuk))
        ];

        if ($presensi->jamkeluar == "") {
            $presensi->update($dt);
            return redirect('presensi-keluar')->with('success', 'Presensi Keluar Berhasil !!');
        } else {
            alert()->error('Gagal!', 'Maaf Anda Sudah Melakukan Presensi Keluar Hari Ini !!');
            return redirect('presensi-keluar');
        }
    }

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
