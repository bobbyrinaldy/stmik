<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kurikulum;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kurikulums = Kurikulum::all();
        $count = Kurikulum::count();

        if($count > 0){
            return view('admin.emerald.kurikulum.index', ['kurikulum' => $kurikulums]);
        } elseif ($count == 0){
            return view('admin.emerald.kurikulum.index', ['add' => 1, 'kurikulum' => $kurikulums]);
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
        return view('admin.emerald.kurikulum.create');
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

        $kurikulums = new Kurikulum;
        if (!$kurikulums) {
            abort(404);
        }

        $kurikulums->deskripsi = $request->deskripsi;
        $kurikulums->save();

        return redirect(url('/admin/kurikulum'));
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
        $kurikulums = Kurikulum::find($id);
        if (!$kurikulums) {
            abort(404);
        }

        return view('admin.emerald.kurikulum.update')->with('kurikulum', $kurikulums);
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


        $kurikulums = Kurikulum::find($id);
        if (!$kurikulums) {
            abort(404);
        }
        
        $kurikulums->deskripsi = $request->deskripsi;
        $kurikulums->save();

        return redirect(url('/admin/kurikulum'));
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
        $kurikulum = kurikulum::all()->first();
        // if (!$kurikulums) {
        //     abort(404);
        // }

      return view('/layanan/kurikulum/index',['kurikulum'=>$kurikulum]);
    }
}
