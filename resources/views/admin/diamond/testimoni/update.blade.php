<!-- Update Testimoni -->

@extends('admin.main')

@section('pageInfo')

<title>Testimoni</title>

@section('rute')
  <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li><a href="/admin/testimoni">Testimoni</a></li>
    <li class="active">Edit</li>

@endsection

@section('pageTitle')

Testimoni

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/testimoni/'. $testimoni->id .'')}}" method="post" enctype="multipart/form-data">

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Testimoni (ID : {{$testimoni->id}})  </div>
          <div class="panel-body">

            <div class="form-group">
              <label for="">Nama : </label>
              <input type="text" name="nama" value="{{$testimoni->nama}}" placeholder="nama" class="form-control">
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
                @if ($testimoni->tag == 'mahasiswa')
                    <option value="mahasiswa" selected>Mahasiswa</option>
                    <option value="alumni">Alumni</option>
                    <option value="perusahaan">Perusahaan</option>
                    <option value="tokohmasyarakat">Tokoh Masyarakat</option>
                @elseif ($testimoni->tag == 'alumni')
                  <option value="mahasiswa" selected>Mahasiswa</option>
                  <option value="alumni" selected>Alumni</option>
                  <option value="perusahaan">Perusahaan</option>
                  <option value="tokohmasyarakat">Tokoh Masyarakat</option>

                @elseif ($testimoni->tag == 'perusahaan')
                  <option value="mahasiswa" selected>Mahasiswa</option>
                  <option value="alumni">Alumni</option>
                  <option value="perusahaan" selected>Perusahaan</option>
                  <option value="tokohmasyarakat">Tokoh Masyarakat</option>

                @elseif ($testimoni->tag == 'tokohmasyarakat')
                  <option value="mahasiswa" selected>Mahasiswa</option>
                  <option value="alumni">Alumni</option>
                  <option value="perusahaan">Perusahaan</option>
                  <option value="tokohmasyarakat" selected>Tokoh Masyarakat</option>
                @endif
              </select>
            </div>

            <div class="form-group">
              <label for="">Deskripsi : </label>
              <textarea name="komentar" rows="10" cols="40" placeholder="Komentar">{{$testimoni->komentar}}</textarea>
          		{{ ($errors->has('komentar')) ?  $errors->first('komentar') : '' }}
            </div>

            <input type="submit" name="name" value="UPDATE" class="btn btn-warning btn-block">
            <a href="/admin/testimoni" class="btn btn-default btn-block" >CANCEL</a>
          </div>
        </div>
      </div><!-- /.col-->
    </div><!-- /.row -->

	</form>

	<!-- End Form -->

@endsection

@stop
