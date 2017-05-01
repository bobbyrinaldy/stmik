<!-- update BEASISWA -->

@extends('admin.main')

@section('pageInfo')

<title>Beasiswa</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Beasiswa

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/beasiswa/'. $beasiswa->id .'')}}" method="post">

		<input type="nama" name="nama" value="{{$beasiswa->nama}}" placeholder="Nama">
		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}

		<br />

		<textarea name="isi" rows="10" cols="40" placeholder="Isi">{!!$beasiswa->deskripsi!!}"</textarea>
		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}

		<br />

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
