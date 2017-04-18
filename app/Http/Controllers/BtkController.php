<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Btk;

class BtkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        
        $btks = Btk::all();        
        $count = Btk::count();
        
        if($count > 0){
            return view('admin.emerald.btk.index', ['btk' => $btks]);
        } elseif ($count == 0){
            return view('admin.emerald.btk.index', ['add' => 1, 'btk' => $btks]);
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
        return view('admin.emerald.btk.create');
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

        $btks = new Btk;
        $btks->deskripsi = $request->deskripsi;
        $btks->save();

        return redirect(url('/admin/btk'));
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
        $btks = Btk::find($id);
        if (!$btks) {
            abort(404);
        }

        return view('admin.emerald.btk.update')->with('btk', $btks);
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


        $btks = Btk::find($id);
        $btks->deskripsi = $request->deskripsi;
        $btks->save();

        return redirect(url('/admin/btk'));
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
