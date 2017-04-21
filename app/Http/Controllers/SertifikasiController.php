<?php

namespace App\Http\Controllers;

use DB;
use Storage;
use Illuminate\Http\Request;
use App\Sertifikasi;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $saranas = Sarana::all();
        $sertifikasis = DB::table('tbl_sertifikasis')->paginate(5);
        return view('admin.diamond.sertifikasi.index', ['sertifikasi' => $sertifikasis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.sertifikasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'isi' => 'required',
            'nama' => 'required',
            ]);

        $sertifikasis = new Sertifikasi;
        if (!$sertifikasis) {
            abort(404);
        }

        $sertifikasis->deskripsi = $request->isi;
        $sertifikasis->nama = $request->nama;

        $filename = "defaultsertifikasi.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('public/' . $filename, file_get_contents($file));

            $sertifikasis->logo = $filename;
        } else {
            $sertifikasis->logo = $filename;
        }

        $sertifikasis->save();

        return redirect(url('/admin/sertifikasi'));
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
        $sertifikasis = Sertifikasi::find($id);
        if (!$sertifikasis) {
            abort(404);
        }

        return view('admin.diamond.sertifikasi.update')->with('sertifikasi', $sertifikasis);
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
        $sertifikasis = Sertifikasi::find($id);
        if (!$sertifikasis) {
            abort(404);
        }

        $sertifikasis->deskripsi = $request->isi;
        $sertifikasis->nama = $request->nama;

        $filename = "defaultsertifikasi.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('public/' . $filename, file_get_contents($file));

            $sertifikasis->logo = $filename;
        } else {
            $sertifikasis->logo = $filename;
        }

        $sertifikasis->save();

        return redirect(url('/admin/sertifikasi'));
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
        $sertifikasis = Sertifikasi::find($id);
        if (!$sertifikasis) {
            abort(404);
        }

        $sertifikasis->delete();
        return redirect(url('/admin/sertifikasi'));
    }

    public function main()
    {
      $sertifikasi = sertifikasi::all();
        // if (!$sertifikasis) {
        //     abort(404);
        // }

      return view('/layanan/sertifikasi_internasional/index',['sertifikasi'=>$sertifikasi]);
    }
}
