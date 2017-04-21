<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sisfo;

class SisfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sisfos = Sisfo::all();
        $count = Sisfo::count();

        if($count > 0){
            return view('admin.emerald.sisfo.index', ['sisfo' => $sisfos]);
        } elseif ($count == 0){
            return view('admin.emerald.sisfo.index', ['add' => 1, 'sisfo' => $sisfos]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.emerald.sisfo.create');
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
            'deskripsi' => 'required',
        ]);

        $sisfos = new Sisfo;
        $sisfos->deskripsi = $request->deskripsi;
        $sisfos->save();

        return redirect(url('/admin/sisfo'));
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
        $sisfos = Sisfo::find($id);
        if (!$sisfos) {
            abort(404);
        }

        return view('admin.emerald.sisfo.update')->with('sisfo', $sisfos);
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
            'deskripsi' => 'required',
            ]);


        $sisfos = Sisfo::find($id);
        $sisfos->deskripsi = $request->deskripsi;
        $sisfos->save();

        return redirect(url('/admin/sisfo'));
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

    public function main()
    {
      $sisfo = sisfo::all()->first();

      return view('/layanan/sisfo_akademik/index',['sisfo'=>$sisfo]);
    }
}
