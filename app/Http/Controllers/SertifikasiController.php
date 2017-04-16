<?php

namespace App\Http\Controllers;

use DB;
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
        return view('diamond.sertifikasi.index', ['sertifikasi' => $sertifikasis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('diamond.sertifikasi.create');
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
            ]);

        $sertifikasis = new Sertifikasi;
        $sertifikasis->deskripsi = $request->isi;
        $sertifikasis->save();

        return redirect(url('/sertifikasi'));
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

        return view('diamond.sertifikasi.update')->with('sertifikasi', $sertifikasis);
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
            'isi' => 'required',
            ]);


        $sertifikasis = Sertifikasi::find($id);
        $sertifikasis->deskripsi = $request->isi;
        $sertifikasis->save();

        return redirect(url('/sertifikasi'));
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
        $sertifikasis->delete();
        return redirect(url('/sertifikasi'));
    }
}
