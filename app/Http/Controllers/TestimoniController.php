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
        $testimonis = testimoni::orderBy('created_at','desc')->get();
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
        if (!$testimonis) {
            abort(404);
        }

        $testimonis->nama = $request->nama;
        $testimonis->komentar = $request->komentar;

        $filename = "defaulttestimoni.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('public/testimoni/' . $filename, file_get_contents($file));

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
        if (!$testimonis) {
            abort(404);
        }

        $testimonis->nama = $request->nama;
        $testimonis->komentar = $request->komentar;

        $testimonis->tag = $request->tag;

        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            Storage::put('public/testimoni' . $filename, file_get_contents($file));

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
        // if (!$testimonis) {
        //     abort(404);
        // }

        $saranas->delete();
        return redirect(url('/admin/testimoni'));
    }

    public function main()
    {
      // $testimoni = DB::table('tbl_testimonis')->paginate(1)->sortByDesc('updated_at');
      $testimoni = Testimoni::inRandomOrder()->paginate(10);
      // $testimoni = Testimoni::paginate(10);
      // $testimoni_mahasiswa = DB::table('tbl_testimonis')->where('tag','=','mahasiswa')->paginate(10)->sortByDesc('updated_at');
      // $testimoni_alumni = DB::table('tbl_testimonis')->where('tag','=','alumni')->paginate(10)->sortByDesc('updated_at');
      // $testimoni_perusahaan = DB::table('tbl_testimonis')->where('tag','=','perusahaan')->paginate(10)->sortByDesc('updated_at');
      // $testimoni_tokoh = DB::table('tbl_testimonis')->where('tag','=','tokohmasyarakat')->paginate(10)->sortByDesc('updated_at');
        // if (!$testimoni_mahasiswa) {
        //     abort(404);
        // }

        return view('/testimoni/index',[
          'testimoni'=>$testimoni,
        ]);

        // return view('/testimoni/index',[
        //   'testimoni_mahasiswa'=>$testimoni_mahasiswa,
        //   'testimoni_alumni'=>$testimoni_alumni,
        //   'testimoni_perusahaan'=>$testimoni_perusahaan,
        //   'testimoni_tokoh'=>$testimoni_tokoh,
        // ]);


      // return view('/berita/index',['berita'=>$berita]);
      // $testi = testimoni::all();
      // if (!$testimonis) {
      //       abort(404);
      //   }


    }

    // public function main_mahasiswa(){
    //   $testimoni = DB::table('tbl_testimonis')->where('tag','=','mahasiswa')->paginate(10)->sortByDesc('updated_at');
    //   return view('/testimoni/index',[
    //     'testimoni_mahasiswa'=>$testimoni_mahasiswa,
    //     'testimoni_alumni'=>$testimoni_alumni,
    //     'testimoni_perusahaan'=>$testimoni_perusahaan,
    //     'testimoni_tokoh'=>$testimoni_tokoh,
    //   ]);
    // }
}
