<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = gallery::all();

        return view('admin.emerald.gallery.index', ['gallery' => $gallery]);
    }

    public function create()
    {
        $gallery = gallery::all();

        return view('admin.emerald.gallery.create', ['gallery' => $gallery]);
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'gambar' => 'required',
            'judul' => 'required',
            ]);

        $gallery = new Gallery;
        if (!$gallery) {
            abort(404);
        }

        $gallery->judul = $request->judul;

        $filename = "defaultgallery.png";
        if($request->gambar) {
            $images = $request->file('gambar');
            $file = $images->getRealPath();
            $filename = $images->getClientOriginalName();
            // Storage::put('upload/images/' . $filename, file_get_contents($file));
            Storage::put('public/gallery/' . $filename, file_get_contents($file));

            $gallery->gambar = $filename;
        } else {
            $gallery->gambar = $filename;
        }

        $gallery->save();

        return redirect(url('/admin/gallery'));
    }

    public function main()
    {
      $gallery = gallery::all()->sortByDesc('created_at');
      $count = gallery::count();

      return view('/gallery/index',['gallery'=>$gallery, 'count'=>$count]);
    }
}
