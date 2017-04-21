<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Si;

class SiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sis = Si::all();
        $count = Si::count();

        if($count > 0){
            return view('admin.emerald.si.index', ['si' => $sis]);
        } elseif ($count == 0){
            return view('admin.emerald.si.index', ['add' => 1, 'si' => $sis]);
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
        return view('admin.emerald.si.create');
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

        $sis = new Si;
        if (!$sis) {
            abort(404);
        }

        $sis->deskripsi = $request->deskripsi;
        $sis->save();

        return redirect(url('/admin/si'));
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
        $sis = Si::find($id);
        if (!$sis) {
            abort(404);
        }

        return view('admin.emerald.si.update')->with('si', $sis);
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


        $sis = Si::find($id);
        if (!$sis) {
            abort(404);
        }
        
        $sis->deskripsi = $request->deskripsi;
        $sis->save();

        return redirect(url('/admin/si'));
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
      $si = Si::all()->first();
      // if (!$si) {
      //       abort(404);
      //   }

      return view('/prodi/si/index',['informasi'=>$si]);
    }
}
