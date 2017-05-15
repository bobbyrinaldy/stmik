<!-- UPDATE SUBKEMAHASISWAAAN -->

@extends('admin.main')

@section('pageInfo')

<title>Subhima</title>

@section('rute')
  <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li><a href="/admin/kemahasiswaan">Subhima</a></li>
  <li class="active">Update</li>

@endsection

@section('pageTitle')

Kemahasiswaan

@endsection

@section('content')

	<!-- form -->

  <form class="" action="{{url('/admin/subkemahasiswaan/'. $subkemahasiswaan->id .'')}}" method="post" enctype="multipart/form-data">

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Subhima (ID : {{$subkemahasiswaan->id}})  </div>
          <div class="panel-body">

            <div class="form-group">
              <label for="">Nama : </label>
              <input type="text" name="nama" value="{{$subkemahasiswaan->nama}}" placeholder="Nama Subhima" class="form-control">
          		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}
            </div>

            <div class="form-group">
              <label for="">Logo : </label>
              <input type="file" name="gambar" value="">
          		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}
            </div>

            <div class="form-group">
              <label for="">Deskripsi : </label>
              <textarea name="deskripsi" rows="10" cols="40" placeholder="deskripsi">{{$subkemahasiswaan->deskripsi}}</textarea>
          		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}
            </div>

            <input type="submit" name="name" value="UPDATE" class="btn btn-warning btn-block">
            <a href="/admin/kemahasiswaan" class="btn btn-default btn-block" >CANCEL</a>
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
