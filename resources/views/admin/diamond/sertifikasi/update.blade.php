<!-- update sertifikasi-->

@extends('admin.main')

@section('pageInfo')

<title>Sertifikasi</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Sertifikasi

@endsection

@section('content')

  <form class="" action="{{url('/admin/sertifikasi/'. $sertifikasi->id .'')}}" method="post" enctype="multipart/form-data">

    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Serifikasi  </div>
					<div class="panel-body">

            <div class="form-group">
              <label for="">Judul : </label>
              <input type="text" name="nama" value="{{$sertifikasi->nama}}" placeholder="nama" class="form-control">
          		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}
            </div>

            <div class="form-group">
              <label for="">Cover : </label>
              <input type="file" name="gambar" value="" placeholder="namanya">
          		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}
            </div>

            <div class="form-group">
              <label for="">Deskripsi : </label>
              <textarea name="isi" rows="10" cols="40" placeholder="Isi">{!! $sertifikasi->deskripsi !!}</textarea>
          		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}
            </div>

            <input type="submit" name="name" value="UPDATE" class="btn btn-warning btn-block">
            <a href="/admin/sertifikasi" class="btn btn-default btn-block" >CANCEL</a>
          </div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->


		<!-- hidden -->
    <input type="hidden" name="_method" value="put">

		<input type="hidden" name="_token" value="{{csrf_token()}}">

  </form>


@endsection

@stop
