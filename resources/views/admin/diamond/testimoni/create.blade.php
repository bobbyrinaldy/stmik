<!-- Create Testimoni -->

@extends('admin.main')

@section('pageInfo')

<title>Testimoni</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

Testimoni

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/testimoni')}}" method="post" enctype="multipart/form-data">

		<input type="text" name="nama" value="" placeholder="nama">
		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}

		<br />

		<textarea name="komentar" rows="10" cols="40" placeholder="Komentar"></textarea>
		{{ ($errors->has('komentar')) ?  $errors->first('komentar') : '' }}

		<br />

		<input type="file" name="gambar" value="" placeholder="namanya">
		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}

		<br />

    <select name="tag" required>
      <option value="mahasiswa">Mahasiswa</option>
      <option value="alumni">Alumni</option>
      <option value="perusahaan">Perusahaan</option>
      <option value="tokohmasyarakat">Tokoh Masyarakat</option>
    </select>

		<br />

		<input type="submit" name="name" value="post">

		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->


	</form>

	<!-- End Form -->

@endsection

@stop
