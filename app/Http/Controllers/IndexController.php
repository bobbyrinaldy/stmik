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
      $sejarah = Sejarah::all()->first();
      // $berita = berita::all()->take(3)->sortByDesc('created_at');
      $berita = DB::table('tbl_beritas')->orderBy('created_at','desc')->take(3)->get();

      return view('index',[
        'carousel'=> $carousel,
        'berita'=> $berita,
        'sejarah'=> $sejarah,
      ]);
    }


}
