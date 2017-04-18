<?php

namespace App\Http\Controllers;

use DB;
use Storage;
use Illuminate\Http\Request;
use App\Testimoni;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonis = DB::table('tbl_testimonis')->paginate(5);
        return view('admin.diamond.testimoni.index', ['testimoni' => $testimonis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.testimoni.create');
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
            'nama' => 'required',
            'komentar' => 'required',
            // 'profile' => 'required',
            'tag' => 'required',
            ]);

        $testimonis = new Testimoni;
        $testimonis->nama = $request->nama;
        $testimonis->komentar = $request->komentar;
        
        $filename = "defaulttestimoni.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('upload/images/' . $filename, file_get_contents($file));

            $testimonis->profile = $filename;
        } else {
            $testimonis->profile = $filename;
        }

        $testimonis->tag = $request->tag;
        $testimonis->save();

        return redirect(url('/admin/testimoni'));
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
        $testimonis = Testimoni::find($id);
        if (!$testimonis) {
            abort(404);
        }

        return view('admin.diamond.testimoni.update')->with('testimoni', $testimonis);
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
            'nama' => 'required',
            'komentar' => 'required',
            // 'profile' => 'required',
            'tag' => 'required',
            ]);

        $testimonis = Testimoni::find($id);
        $testimonis->nama = $request->nama;
        $testimonis->komentar = $request->komentar;
        
        $testimonis->tag = $request->tag;

        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('upload/images/' . $filename, file_get_contents($file));

            $testimonis->profile = $filename;
        }

        $testimonis->save();

        return redirect(url('/admin/testimoni'));
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
        $saranas = Testimoni::find($id);
        $saranas->delete();
        return redirect(url('/admin/testimoni'));
    }
}
