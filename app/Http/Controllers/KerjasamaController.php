<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Kerjasama;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kerjasamas = DB::table('tbl_kerjasamas')->paginate(5);
        return view('diamond.kerjasama.index', ['kerjasama' => $kerjasamas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('diamond.kerjasama.create');
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

        $kerjasamas = new Kerjasama;
        $kerjasamas->logo = $request->isi;
        $kerjasamas->save();

        return redirect(url('/kerjasama'));
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
        $kerjasamas = Kerjasama::find($id);
        if (!$kerjasamas) {
            abort(404);
        }

        return view('diamond.kerjasama.update')->with('kerjasama', $kerjasamas);
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


        $kerjasamas = Kerjasama::find($id);
        $kerjasamas->logo = $request->isi;
        $kerjasamas->save();

        return redirect(url('/kerjasama'));
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
        $kerjasamas = Kerjasama::find($id);
        $kerjasamas->delete();
        return redirect(url('/kerjasama'));
    }
}
