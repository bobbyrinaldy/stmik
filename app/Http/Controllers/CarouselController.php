<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Carousel;

class CarouselController extends Controller
{
    public function index()
    {
      $cr = carousel::all();

      return view('/admin/diamond/carousel/index',['cr' => $cr]);
    }

    public function create()
    {

        return view('admin.diamond.carousel.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'gambar' => 'required',
            'nama' => 'required',
            ]);

        $carousel = new Carousel;
        if (!$carousel) {
            abort(404);
        }

        $carousel->nama = $request->nama;

        $filename = "defaultcr.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            // Storage::put('upload/images/' . $filename, file_get_contents($file));
            Storage::put('public/carousel/' . $filename, file_get_contents($file));

            $carousel->gambar = $filename;
        } else {
            $carousel->gambar = $filename;
        }

        $carousel->save();

        return redirect(url('/admin/carousel'));
    }
}
