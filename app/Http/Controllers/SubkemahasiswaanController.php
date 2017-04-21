<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Subkemahasiswaan;
use App\Berita;

class SubkemahasiswaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.subkemahasiswaan.create');
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
        $images = $request->file('gambar');
        $file = $images->getRealPath();
        $filename = $images->getClientOriginalName();
        Storage::put('public/' . $filename, file_get_contents($file));

        $this->validate($request, [
            'id_org' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            ]);

        $subkemahasiswaans = new Subkemahasiswaan;
        if (!$subkemahasiswaans) {
            abort(404);
        }

        $subkemahasiswaans->id_org = $request->id_org;
        $subkemahasiswaans->nama = $request->nama;
        $subkemahasiswaans->deskripsi = $request->deskripsi;
        $subkemahasiswaans->logo = $filename;
        $subkemahasiswaans->save();

        return redirect(url('/admin/kemahasiswaan'));
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
        $subkemahasiswaans = Subkemahasiswaan::find($id);
        if (!$subkemahasiswaans) {
            abort(404);
        }

        return view('admin.diamond.subkemahasiswaan.update')->with('subkemahasiswaan', $subkemahasiswaans);
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
            'id_org' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            ]);


        $subkemahasiswaans = Subkemahasiswaan::find($id);
        if (!$subkemahasiswaans) {
            abort(404);
        }

        $subkemahasiswaans->id_org = $request->id_org;
        $subkemahasiswaans->nama = $request->nama;
        $subkemahasiswaans->deskripsi = $request->deskripsi;


        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('public/' . $filename, file_get_contents($file));

            $subkemahasiswaans->logo = $filename;
        }

        $subkemahasiswaans->save();

        return redirect(url('/admin/kemahasiswaan'));
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
        //
        $subkemahasiswaans = Subkemahasiswaan::find($id);
        if (!$subkemahasiswaans) {
            abort(404);
        }
        
        $subkemahasiswaans->delete();
        return redirect(url('/admin/kemahasiswaan'));
    }

    public function loopcommunity()
    {
      $loop = subkemahasiswaan::where('nama','loop')->orWhere('nama','loopc')->orWhere('nama','loopcommunity')->first();

      return view('/kemahasiswaan/subhima/loop/index',['loop'=>$loop]);
    }

    public function crash()
    {
      $crash = subkemahasiswaan::where('nama','crash')->orWhere('nama','crash')->first();

      return view('/kemahasiswaan/subhima/crash/index',['crash'=>$crash]);
    }

    public function comic()
    {
      $comic = subkemahasiswaan::where('nama','comic')->orWhere('nama','comiclpkia')->first();

      return view('/kemahasiswaan/subhima/comic/index',['comic'=>$comic]);
    }

    public function move()
    {
      $move = subkemahasiswaan::where('nama','move')->orWhere('nama','movelpkia')->first();
      $berita = berita::all()->take(5);

      return view('/kemahasiswaan/subhima/move/index',[
        'move'=>$move,
        'berita'=>$berita
      ]);
    }
}
