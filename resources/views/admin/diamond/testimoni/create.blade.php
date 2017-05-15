<!-- Create Testimoni -->

@extends('admin.main')

@section('pageInfo')

<title>Testimoni</title>

@section('rute')
  <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li><a href="/admin/testimoni">Testimoni</a></li>
  <li class="active">Create</li>

@endsection

@section('pageTitle')

Testimoni

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/testimoni')}}" method="post" enctype="multipart/form-data">

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Create New Testimoni </div>
          <div class="panel-body">

            <div class="form-group">
              <label for="">Nama : </label>
              <input type="text" name="nama" value="" placeholder="nama" class="form-control">
          		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}
            </div>

            <div class="form-group">
              <label for="">Foto Profile : </label>
              <input type="file" name="gambar" value="" placeholder="namanya">
          		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}
            </div>

            <div class="form-group">
              <label for="">Tag : </label>
              <select name="tag" required class="form-control">
                <option value="mahasiswa">Mahasiswa</option>
                <option value="alumni">Alumni</option>
                <option value="perusahaan">Perusahaan</option>
                <option value="tokohmasyarakat">Tokoh Masyarakat</option>
              </select>
            </div>

            <div class="form-group">
              <label for="">Deskripsi : </label>
              <textarea name="komentar" rows="10" cols="40" placeholder="Komentar"></textarea>
          		{{ ($errors->has('komentar')) ?  $errors->first('komentar') : '' }}
            </div>

            <input type="submit" name="name" value="SAVE" class="btn btn-success btn-block">
            <a href="/admin/kemahasiswaan" class="btn btn-default btn-block" >CANCEL</a>
          </div>
        </div>
      </div><!-- /.col-->
    </div><!-- /.row -->


    <!-- hidden -->
    <input type="hidden" name="_token" value="{{csrf_token()}}">

  </form>
	<!-- End Form -->

@endsection

@stop
