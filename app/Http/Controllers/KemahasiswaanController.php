<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Kemahasiswaan;
use App\Subkemahasiswaan;

class KemahasiswaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kemahasiswaans = Kemahasiswaan::orderBy('created_at','desc')->get();
        $subKemahasiswaans = Subkemahasiswaan::orderBy('created_at','desc')->get();

        return view('admin.diamond.kemahasiswaan.index', [
            'kemahasiswaan' => $kemahasiswaans ,
            'subkemahasiswaan' => $subKemahasiswaans ,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.kemahasiswaan.create');
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

        $images = $request->file('gambar');
        $file = $images->getRealPath();
        $filename = $images->getClientOriginalName();
        Storage::put('public/kemahasiswaan/' . $filename, file_get_contents($file));

        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            ]);

        $kemahasiswaans = new Kemahasiswaan;
        if (!$kemahasiswaans) {
            abort(404);
        }

        $kemahasiswaans->nama = $request->nama;
        $kemahasiswaans->deskripsi = $request->deskripsi;
        $kemahasiswaans->logo = $filename;
        $kemahasiswaans->save();

        return redirect(url('/admin/kemahasiswaan'));
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
        $kemahasiswaans = Kemahasiswaan::find($id);
        if (!$kemahasiswaans) {
            abort(404);
        }

        return view('admin.diamond.kemahasiswaan.update')->with('kemahasiswaan', $kemahasiswaans);
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
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            ]);


        $kemahasiswaans = Kemahasiswaan::find($id);
        if (!$kemahasiswaans) {
            abort(404);
        }

        $kemahasiswaans->nama = $request->nama;
        $kemahasiswaans->deskripsi = $request->deskripsi;

        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('public/kemahasiswaan/' . $filename, file_get_contents($file));

            $kemahasiswaans->logo = $filename;
        }


        $kemahasiswaans->save();

        return redirect(url('/admin/kemahasiswaan'));
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
        //
        $kemahasiswaans = Kemahasiswaan::find($id);
        $kemahasiswaans->delete();
        return redirect(url('/admin/kemahasiswaan'));
    }

    public function himastmik()
    {
      $stmik = kemahasiswaan::where('nama','himastmik')->orWhere('nama','HIMA STMIK LPKIA')->orWhere('nama','stmik')->first();
      // if (!$stmik) {
      //       abort(404);
      //   }


      return view('/kemahasiswaan/hima/himastmik/index',['stmik'=>$stmik]);
    }

    public function himakom()
    {
      $himakom = kemahasiswaan::where('nama','HIMAKOM')->orWhere('nama','himakomputer')->orWhere('nama','himakomlpkia')->first();
      // if (!$himakom) {
      //       abort(404);
      //   }


      return view('/kemahasiswaan/hima/himakom/index',['himakom'=>$himakom]);
    }
}
