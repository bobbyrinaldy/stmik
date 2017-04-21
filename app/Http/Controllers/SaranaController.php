<?php

namespace App\Http\Controllers;

use DB;
use Storage;
use Illuminate\Http\Request;
use App\Sarana;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $saranas = Sarana::all();
        $saranas = DB::table('tbl_sarana_prasaranas')->paginate(5);
        // if (!$saranas) {
        //     abort(404);
        // }

        return view('admin/diamond/sarana/index', ['sarana' => $saranas]);
    }

    /**''
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.sarana.create');
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

        $saranas = new Sarana;
        if (!$saranas) {
            abort(404);
        }

        $saranas->nama = $request->judul;
        $saranas->deskripsi = $request->isi;

        $filename = "defaultsarana.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('public/' . $filename, file_get_contents($file));

            $saranas->cover = $filename;
        } else {
            $saranas->cover = $filename;
        }

        $saranas->save();



        return redirect(url('/admin/sarana'));

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
        $saranas = Sarana::find($id);
        if (!$saranas) {
            abort(404);
        }

        return view('admin.diamond.sarana.update')->with('sarana', $saranas);
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

        // $images = $request->file('gambar');
        // $file = $images->getRealPath();
        // $filename = $images->getClientOriginalName();
        // Storage::put('upload/images/' . $filename, file_get_contents($file));



        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required',
            ]);


        $saranas = Sarana::find($id);
        if (!$saranas) {
            abort(404);
        }

        $saranas->nama = $request->judul;
        $saranas->deskripsi = $request->isi;
        // $saranas->cover = $filename;


        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('public/' . $filename, file_get_contents($file));

            $saranas->cover = $filename;
        }

        $saranas->save();

        return redirect(url('/admin/sarana'));
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
        $saranas = Sarana::find($id);
        if (!$saranas) {
            abort(404);
        }
        
        $saranas->delete();
        return redirect(url('/admin/sarana'));
    }

    public function main()
    {
      $saranas = sarana::all();
        // if (!$saranas) {
        //     abort(404);
        // }

      return view('/layanan/sarana_prasarana/index',['sarana'=>$saranas]);
    }
}
