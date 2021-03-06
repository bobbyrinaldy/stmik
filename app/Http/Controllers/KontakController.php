<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kontaks = Kontak::all();
        $count = Kontak::count();
        
        if($count > 0){
            return view('admin.emerald.contactus.index', ['kontak' => $kontaks]);
        } elseif ($count == 0){
            return view('admin.emerald.contactus.index', ['add' => 1, 'kontak' => $kontaks]);
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
        return view('admin.emerald.contactus.create');
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

        $kontaks = new Kontak;
        if (!$kontaks) {
            abort(404);
        }

        $kontaks->deskripsi = $request->deskripsi;
        $kontaks->save();

        return redirect(url('/admin/kontak'));
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
        $kontaks = Kontak::find($id);
        if (!$kontaks) {
            abort(404);
        }

        return view('admin.emerald.contactus.update')->with('kontak', $kontaks);
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


        $kontaks = Kontak::find($id);
        if (!$kontaks) {
            abort(404);
        }
        
        $kontaks->deskripsi = $request->deskripsi;
        $kontaks->save();
 // m_completeauthorizations(conn, array)
        return redirect(url('/admin/kontak'));
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
}
