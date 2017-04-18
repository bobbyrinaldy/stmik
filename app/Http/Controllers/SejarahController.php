<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sejarah;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sejarahs = Sejarah::all();
        $count = Sejarah::count();
        
        if($count > 0){
            return view('admin.emerald.sejarah.index', ['sejarah' => $sejarahs]);
        } elseif ($count == 0){
            return view('admin.emerald.sejarah.index', ['add' => 1, 'sejarah' => $sejarahs]);
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
        return view('admin.emerald.sejarah.create');
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

        $sejarahs = new Sejarah;
        $sejarahs->deskripsi = $request->deskripsi;
        $sejarahs->save();

        return redirect(url('/admin/sejarah'));
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
        $sejarahs = Sejarah::find($id);
        if (!$sejarahs) {
            abort(404);
        }

        return view('admin.emerald.sejarah.update')->with('sejarah', $sejarahs);
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


        $sejarahs = Sejarah::find($id);
        $sejarahs->deskripsi = $request->deskripsi;
        $sejarahs->save();

        return redirect(url('/admin/sejarah'));
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
