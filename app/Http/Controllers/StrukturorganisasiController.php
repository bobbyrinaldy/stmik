<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Strukturorganisasi;

class StrukturorganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $strukturorganisasis = Strukturorganisasi::all();
        return view('admin.emerald.strukturorganisasi.index', ['strukturorganisasi' => $strukturorganisasis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.emerald.strukturorganisasi.create');
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
        Storage::put('upload/images/' . $filename, file_get_contents($file));

        // $this->validate($request, [
        //     'gambar' => 'required',
        //     ]);

        $strukturorganisasis = new Strukturorganisasi;
        $strukturorganisasis->gambar = $filename;
        $strukturorganisasis->save();

        return redirect(url('/admin/strukturorganisasi'));
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
        $strukturorganisasis = Strukturorganisasi::find($id);
        if (!$strukturorganisasis) {
            abort(404);
        }

        return view('admin.emerald.strukturorganisasi.update')->with('strukturorganisasi', $strukturorganisasis);
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
        // $this->validate($request, [
        //     'gambar' => 'required',
        //     ]);

        $strukturorganisasis = Strukturorganisasi::find($id);
        $strukturorganisasis->gambar = $request->gambar;
        $strukturorganisasis->save();

        return redirect(url('/admin/strukturorganisasi'));
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
        $strukturorganisasis = Strukturorganisasi::find($id);
        $strukturorganisasis->delete();
        return redirect(url('/admin/strukturorganisasi'));
    }
}
