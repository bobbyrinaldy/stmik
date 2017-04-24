<?php

namespace App\Http\Controllers;

use DB;
use Storage;
use Illuminate\Http\Request;
use App\Kerjasama;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kerjasamas = DB::table('tbl_kerjasamas')->paginate(5);
        // if (!$kerjasamas) {
        //     abort(404);
        // }

        return view('admin.diamond.kerjasama.index', ['kerjasama' => $kerjasamas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.kerjasama.create');
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
        Storage::put('public/kerjasama/' . $filename, file_get_contents($file));

        $this->validate($request, [
            'perusahaan'=> 'required',
            'isi' => 'required',
            ]);

        $kerjasamas = new Kerjasama;
        if (!$kerjasamas) {
            abort(404);
        }

        $kerjasamas->perusahaan = $request->perusahaan;
        $kerjasamas->deskripsi = $request->isi;
        $kerjasamas->kategori = $request->kategori;
        $kerjasamas->logo = $filename;
        $kerjasamas->save();

        return redirect(url('/admin/kerjasama'));
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
        $kerjasamas = Kerjasama::find($id);
        if (!$kerjasamas) {
            abort(404);
        }

        return view('admin.diamond.kerjasama.update')->with('kerjasama', $kerjasamas);
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
            'perusahaan'=> 'required',
            'isi' => 'required',
            ]);

        $kerjasamas = Kerjasama::find($id);
        if (!$kerjasamas) {
            abort(404);
        }

        $kerjasamas->perusahaan = $request->perusahaan;
        $kerjasamas->deskripsi = $request->isi;

        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('public/kerjasama/' . $filename, file_get_contents($file));

            $kerjasamas->logo = $filename;
        }

        $kerjasamas->save();

        return redirect(url('/admin/kerjasama'));
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
        $kerjasamas = Kerjasama::find($id);
        if (!$kerjasamas) {
            abort(404);
        }

        $kerjasamas->delete();
        return redirect(url('/admin/kerjasama'));
    }

    public function dalam()
    {
      $kerjasama = kerjasama::all()->where('kategori','dalam');
      // if (!$kerjasamas) {
      //       abort(404);
      //   }

      return view('/kerjasama/index',['kerjasama'=>$kerjasama]);
    }

    public function luar()
    {
      $kerjasama = kerjasama::all()->where('kategori','luar');
      // if (!$kerjasamas) {
      //       abort(404);
      //   }

      return view('/kerjasama/index',['kerjasama'=>$kerjasama]);
    }
}
