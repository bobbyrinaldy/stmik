<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Beasiswa;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $beasiswas = DB::table('tbl_beasiswas')->paginate(5);
        // if (!$beasiswas) {
        //     abort(404);
        // }

        // return view('admin.diamond.beasiswa.index', ['beasiswa' => $beasiswas]);

        $search = \Request::get('search');
        // $kerjasamas = DB::table('tbl_kerjasamas')->Where('perusahaan', '=' , $search)->paginate(20);
        $beasiswas = Beasiswa::where('nama', 'like' , '%'.$search.'%')->paginate(20);

        // dd($kerjasamas);
        return view('admin.diamond.beasiswa.index', ['beasiswa' => $beasiswas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.diamond.beasiswa.create');
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
            'isi' => 'required',
            ]);

        $beasiswas = new Beasiswa;
        $beasiswas->nama = $request->nama;
        $beasiswas->deskripsi = $request->isi;
        $beasiswas->save();

        return redirect(url('/admin/beasiswa'));
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
        $beasiswas = Beasiswa::find($id);
        if (!$beasiswas) {
            abort(404);
        }

        return view('admin.diamond.beasiswa.update')->with('beasiswa', $beasiswas);
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
            'isi' => 'required',
            ]);

        $beasiswas = Beasiswa::find($id);
        if (!$beasiswas) {
            abort(404);
        }

        $beasiswas->nama = $request->nama;
        $beasiswas->deskripsi = $request->isi;
        $beasiswas->save();

        return redirect(url('/admin/beasiswa'));
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
        $beasiswas = Beasiswa::find($id);
        if (!$beasiswas) {
            abort(404);
        }

        $beasiswas->delete();
        return redirect(url('/admin/beasiswa'));
    }

    public function main()
    {
        $beasiswa = Beasiswa::orderBy('updated_at', 'desc')->paginate(7);
        // if (!$beasiswas) {
        //     abort(404);
        // }
        // dd($beasiswa)
      return view('/layanan/beasiswa/index', ['beasiswa'=>$beasiswa]);
    }

    public function detail($id)
    {
      // echo "SUKSES";
        $beasiswa = Beasiswa::find($id);
        // if (!$beasiswas) {
        //     abort(404);
        // }
        // dd($beasiswa);
      return view('layanan/beasiswa/view', ['beasiswa'=>$beasiswa]);
    }
}
