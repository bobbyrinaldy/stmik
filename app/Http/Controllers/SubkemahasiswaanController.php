<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subkemahasiswaan;

class SubkemahasiswaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.subkemahasiswaan.create');
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
            'id_org' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'logo' => 'required',
            ]);

        $subkemahasiswaans = new Subkemahasiswaan;
        $subkemahasiswaans->id_org = $request->id_org;
        $subkemahasiswaans->nama = $request->nama;
        $subkemahasiswaans->deskripsi = $request->deskripsi;
        $subkemahasiswaans->logo = $request->logo;
        $subkemahasiswaans->save();

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
        $subkemahasiswaans = Subkemahasiswaan::find($id);
        if (!$subkemahasiswaans) {
            abort(404);
        }

        return view('admin.diamond.subkemahasiswaan.update')->with('subkemahasiswaan', $subkemahasiswaans);
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
            'id_org' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'logo' => 'required',
            ]);


        $subkemahasiswaans = Subkemahasiswaan::find($id);
        $subkemahasiswaans->id_org = $request->id_org;
        $subkemahasiswaans->nama = $request->nama;
        $subkemahasiswaans->deskripsi = $request->deskripsi;
        $subkemahasiswaans->logo = $request->logo;
        $subkemahasiswaans->save();

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
        $subkemahasiswaans = Subkemahasiswaan::find($id);
        $subkemahasiswaans->delete();
        return redirect(url('/admin/kemahasiswaan'));
    }
}
