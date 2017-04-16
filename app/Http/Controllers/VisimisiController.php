<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visimisi;

class VisimisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visimisis = Visimisi::all();
        return view('admin.emerald.visimisi.index', ['visimisi' => $visimisis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $visimisis = Visimisi::find($id);
        if (!$visimisis) {
            abort(404);
        }

        return view('admin.emerald.visimisi.update')->with('visimisi', $visimisis);
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
            'visi' => 'required',
            'misi' => 'required',
            ]);


        $visimisis = Visimisi::find($id);
        $visimisis->visi = $request->visi;
        $visimisis->misi = $request->misi;
        $visimisis->save();

        return redirect(url('/admin/visimisi'));
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
