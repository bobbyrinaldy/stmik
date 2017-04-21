<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\If_model;

class IfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ifs = If_model::all();
        $count = If_model::count();

        if($count > 0){
            return view('admin.emerald.if.index', ['if' => $ifs]);
        } elseif ($count == 0){
            return view('admin.emerald.if.index', ['add' => 1, 'if' => $ifs]);
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
        return view('admin.emerald.if.create');
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

        $ifs = new If_model;
        $ifs->deskripsi = $request->deskripsi;
        $ifs->save();

        return redirect(url('/admin/if'));
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
        $ifs = If_model::find($id);
        if (!$ifs) {
            abort(404);
        }

        return view('admin.emerald.if.update')->with('if', $ifs);
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


        $ifs = If_model::find($id);
        $ifs->deskripsi = $request->deskripsi;
        $ifs->save();

        return redirect(url('/admin/if'));
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
      $if = If_model::all()->first();


      return view('/prodi/if/index',['informatika'=>$if]);
    }
}
