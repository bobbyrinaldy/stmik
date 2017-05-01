<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchAdminController extends Controller
{
    //
    public function kerjasama(){
        echo "Diamond";
        // $search = Request::get('search');
        // $kerjasamas = DB::table('tbl_kerjasamas')->Where('perusahaan', '=' , $search)->paginate(20);

        // dd($kerjasamas);
        // return view('admin.diamond.kerjasama.index', ['kerjasama' => $kerjasamas]);
    }
}
