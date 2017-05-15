<!-- update BERITA -->

@extends('admin.main')

@section('pageInfo')

<title>Berita</title>

@section('rute')
  <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li><a href="/admin/berita">Berita</a></li>
  <li class="active">Edit</li>

@endsection

@section('pageTitle')

Berita

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/berita/'. $berita->id .'')}}" method="post" enctype="multipart/form-data">

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Berita (ID : {{$berita->id}})  </div>
          <div class="panel-body">

            <div class="form-group">
              <label for="">Nama : </label>
              <input type="text" name="judul" value="{{$berita->judul}}" class="form-control">
          		{{ ($errors->has('judul')) ?  $errors->first('judul') : '' }}
            </div>

            <div class="form-group">
              <label for="">Logo : </label>
              <input type="file" name="gambar" value="">
          		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}
            </div>

            <div class="form-group">
              <label for="">Deskripsi : </label>
              <textarea name="isi" rows="10" cols="40" placeholder="Isi">{{$berita->deskripsi}}</textarea>
          		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}
            </div>

            <input type="submit" name="name" value="UPDATE" class="btn btn-warning btn-block">
            <a href="/admin/berita" class="btn btn-default btn-block" >CANCEL</a>
          </div>
        </div>
      </div><!-- /.col-->
    </div><!-- /.row -->


    <!-- hidden -->
    <input type="hidden" name="_method" value="put">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

  </form>
	<!-- End Form -->

@endsection

@stop
