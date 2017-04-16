<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Beasiswa;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $beasiswas = DB::table('tbl_beasiswas')->paginate(5);
        return view('diamond.beasiswa.index', ['beasiswa' => $beasiswas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('diamond.beasiswa.create');
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

        $beasiswas = new Beasiswa;
        $beasiswas->deskripsi = $request->isi;
        $beasiswas->save();

        return redirect(url('/beasiswa'));
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
        $beasiswas = Beasiswa::find($id);
        if (!$beasiswas) {
            abort(404);
        }

        return view('diamond.beasiswa.update')->with('beasiswa', $beasiswas);
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


        $beasiswas = Beasiswa::find($id);
        $beasiswas->deskripsi = $request->isi;
        $beasiswas->save();

        return redirect(url('/beasiswa'));
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
        $beasiswas = Beasiswa::find($id);
        $beasiswas->delete();
        return redirect(url('/beasiswa'));
    }
}
