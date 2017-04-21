<!-- UPDATE kerjaSAMA -->

@extends('admin.main')

@section('pageInfo')

<title>Kerjasama</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Kerjasama

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/kerjasama/'. $kerjasama->id .'')}}" method="post" enctype="multipart/form-data">

		<input type="text" name="perusahaan" value="{{$kerjasama->perusahaan}}" placeholder="perusahaan">
		{{ ($errors->has('perusahaan')) ?  $errors->first('perusahaan') : '' }}

		<br />

		<textarea name="isi" rows="10" cols="40" placeholder="Isi">{{$kerjasama->deskripsi}}</textarea>
		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}

		<br />

		<input type="file" name="gambar" value="" placeholder="namanya">
		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}

		<br />

		<input type="submit" name="name" value="edit">

		<!-- hidden -->
		<input type="hidden" name="_method" value="put">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->
		
	</form>

	<!-- End Form -->

@endsection

@stop