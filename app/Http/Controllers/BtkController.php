<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Btk;
use Storage;

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

        return view('admin.emerald.btk.index', ['btk' => $btks]);
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
            'judul' => 'required',
            ]);

        $btks = new Btk;
        if (!$btks) {
            abort(404);
        }

        $btks->judul = $request->judul;
        $btks->deskripsi = $request->deskripsi;

        $filename = "defaultbtk.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            // Storage::put('upload/images/' . $filename, file_get_contents($file));
            Storage::put('public/btk/' . $filename, file_get_contents($file));

            $btks->gambar = $filename;
        } else {
            $btks->gambar = $filename;
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
            'judul' => 'required',
            ]);

        $btks = Btk::find($id);
        if (!$btks) {
            abort(404);
        }
        $btks->deskripsi = $request->deskripsi;
        $btks->judul = $request->judul;

        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            // Storage::put('upload/images/' . $filename, file_get_contents($file));
            Storage::put('public/' . $filename, file_get_contents($file));

            $btks->gambar = $filename;
        } else {
            $btks->gambar = $filename;
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
      $btks = DB::table('tbl_btks')->paginate(5)->sortByDesc('created_at');
        // if (!$btks) {
        //     abort(404);
        // }

      return view('/btk/index',['btks'=>$btks]);
    }

    public function detail($id)
    {
      $detail = btk::find($id)->first();

      return view('/btk/view',['detail'=>$detail]);
    }
}
