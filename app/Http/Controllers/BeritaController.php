<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Berita;
use Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $beritas = DB::table('tbl_beritas')->paginate(5);
        return view('admin.diamond.berita.index', ['berita' => $beritas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.berita.create');
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

        $beritas = new Berita;
        $beritas->judul = $request->judul;
        $beritas->deskripsi = $request->isi;

        $filename = "defaultberita.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('upload/images/' . $filename, file_get_contents($file));

            $beritas->cover = $filename;
        } else {
            $beritas->cover = $filename;
        }

        $beritas->save();

        return redirect(url('/admin/berita'));
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
        // $beritas = Berita::where('title', $id)->first();
        $beritas = Berita::find($id);
        if (!$beritas) {
            abort(404);
        }

        return view('admin.diamond.berita.show')->with('berita', $beritas);
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
        $beritas = Berita::find($id);
        if (!$beritas) {
            abort(404);
        }

        return view('admin.diamond.berita.update')->with('berita', $beritas);
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

        $beritas = Berita::find($id);
        $beritas->judul = $request->judul;
        $beritas->deskripsi = $request->isi;

        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('upload/images/' . $filename, file_get_contents($file));

            $beritas->cover = $filename;
        }

        $beritas->save();

        return redirect(url('/admin/berita'));
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
        $beritas = Berita::find($id);
        $beritas->delete();
        return redirect(url('/admin/berita'));
    }

    public function main()
    {
      $berita = berita::all();


      return view('/berita/index',['berita'=>$berita]);
    }

    public function detail($id)
    {
      $detail = berita::find($id)->first();

      return view('/berita/view',['detail'=>$detail]);
    }
}
