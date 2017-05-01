<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Carousel;
use App\Berita;
use App\Sejarah;
use DB;


class IndexController extends Controller
{
    public function index()
    {
      $carousel = Carousel::all()->take(12)->sortByDesc('created_at');
      // $sejarah = Sejarah::all()->first();
      // $berita = berita::all()->take(3)->sortByDesc('created_at');
      // $berita = DB::table('tbl_beritas')->orderBy('created_at','desc')->take(3)->get();
      $berita = DB::table('tbl_beritas')
        ->join('users', 'users.id', '=' ,'tbl_beritas.id_usr')
        ->select('tbl_beritas.*', 'users.name')
        ->orderBy('created_at','desc')
        ->take(3)->get();

      $kerjasama = DB::table('tbl_kerjasamas')->orderBy('updated_at', 'desc')->take(8)->get();

      // dd($berita);

      return view('index',[
        'carousel'=> $carousel,
        'berita'=> $berita,
        'kerjasama' => $kerjasama,
        // 'sejarah'=> $sejarah,
      ]);
    }


}
