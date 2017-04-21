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
        if (!$btks) {
            abort(404);
        }

        $btks->deskripsi = $request->deskripsi;

        $filename = "defaultbtk.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            // Storage::put('upload/images/' . $filename, file_get_contents($file));
            Storage::put('public/' . $filename, file_get_contents($file));

            $btks->cover = $filename;
        } else {
            $btks->cover = $filename;
        }
        
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
        if (!$btks) {
            abort(404);
        }
        $btks->deskripsi = $request->deskripsi;

        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            // Storage::put('upload/images/' . $filename, file_get_contents($file));
            Storage::put('public/' . $filename, file_get_contents($file));

            $btks->cover = $filename;
        } else {
            $btks->cover = $filename;
        }

        
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

    public function main()
    {
        $btk = btk::all();
        // if (!$btks) {
        //     abort(404);
        // }

      return view('/btk/index',['btk'=>$btk]);
    }
}
