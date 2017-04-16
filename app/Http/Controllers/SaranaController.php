<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Sarana;

class SaranaController extends Controller
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
        $saranas = DB::table('tbl_sarana_prasaranas')->paginate(5);
        return view('admin/diamond/sarana/index', ['sarana' => $saranas]);
    }

    /**''
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.sarana.create');
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
            'judul' => 'required',
            'isi' => 'required',
            ]);

        $saranas = new Sarana;
        $saranas->nama = $request->judul;
        $saranas->deskripsi = $request->isi;
        $saranas->cover = "null";
        $saranas->save();

        return redirect(url('/admin/sarana'));

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
        $saranas = Sarana::find($id);
        if (!$saranas) {
            abort(404);
        }

        return view('admin.diamond.sarana.update')->with('sarana', $saranas);
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
            'judul' => 'required',
            'isi' => 'required',
            ]);


        $saranas = Sarana::find($id);
        $saranas->nama = $request->judul;
        $saranas->deskripsi = $request->isi;
        $saranas->cover = "null";
        $saranas->save();

        return redirect(url('/admin/sarana'));
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
        $saranas = Sarana::find($id);
        $saranas->delete();
        return redirect(url('/admin/sarana'));
    }
}
