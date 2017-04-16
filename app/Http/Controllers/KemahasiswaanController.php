<?php

namespace App\Http\Controllers;

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
        $kemahasiswaans = Kemahasiswaan::all();
        $subKemahasiswaans = Subkemahasiswaan::all();

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
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
            'logo' => 'required',
            ]);

        $kemahasiswaans = new Kemahasiswaan;
        $kemahasiswaans->nama = $request->nama;
        $kemahasiswaans->deskripsi = $request->deskripsi;
        $kemahasiswaans->logo = $request->logo;
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
            'logo' => 'required',
            ]);


        $kemahasiswaans = Kemahasiswaan::find($id);
        $kemahasiswaans->nama = $request->nama;
        $kemahasiswaans->deskripsi = $request->deskripsi;
        $kemahasiswaans->logo = $request->logo;
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
}
