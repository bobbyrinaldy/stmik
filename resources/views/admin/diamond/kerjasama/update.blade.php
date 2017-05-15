<!-- UPDATE kerjaSAMA -->

@extends('admin.main')

@section('pageInfo')

<title>Kerjasama</title>

@section('rute')
  <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li><a href="/admin/kerjasama">Kerjasama</a></li>
  <li class="active">Edit</li>

@endsection

@section('pageTitle')

Kerjasama

@endsection

@section('content')

	<!-- form -->
  <form class="" action="{{url('/admin/kerjasama/'. $kerjasama->id .'')}}" method="post" enctype="multipart/form-data">

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Kerjasama (ID : {{$kerjasama->id}})  </div>
          <div class="panel-body">

            <div class="form-group">
              <label for="">Nama : </label>
              <input type="text" name="perusahaan" value="{{$kerjasama->perusahaan}}" placeholder="perusahaan" class="form-control">
          		{{ ($errors->has('perusahaan')) ?  $errors->first('perusahaan') : '' }}
            </div>

            <div class="form-group">
              <label for="">Logo : </label>
              <input type="file" name="gambar" value="">
          		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}
            </div>

            <div class="form-group">
              <label for="">Logo : </label>
              <select name="kategori" class="form-control">
                <option value="luar">Luar Negeri</option>
                <option value="dalam">Dalam Negeri</option>
              </select>
            </div>

            <div class="form-group">
              <label for="">Deskripsi : </label>
              <textarea name="isi" rows="10" cols="40" placeholder="Isi">{{$kerjasama->deskripsi}}</textarea>
          		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}
            </div>

            <input type="submit" name="name" value="UPDATE" class="btn btn-warning btn-block">
            <a href="/admin/kerjasama" class="btn btn-default btn-block" >CANCEL</a>
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
