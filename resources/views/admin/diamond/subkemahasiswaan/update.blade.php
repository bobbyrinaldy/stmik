<!-- UPDATE SUBKEMAHASISWAAAN -->

@extends('admin.main')

@section('pageInfo')

<title>Subhima</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Kemahasiswaan

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/subkemahasiswaan/'. $subkemahasiswaan->id .'')}}" method="post">

		<input type="text" name="id_org" value="{{$subkemahasiswaan->id_org}}">
		{{ ($errors->has('id_org')) ?  $errors->first('id_org') : '' }}

		<br />

		<input type="text" name="nama" value="{{$subkemahasiswaan->nama}}">
		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}

		<br />

		<textarea name="deskripsi" rows="10" cols="40" placeholder="deskripsi">{{$subkemahasiswaan->deskripsi}}</textarea>
		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}

		<br />

		<input type="text" name="logo" value="{{$subkemahasiswaan->logo}}">
		{{ ($errors->has('logo')) ?  $errors->first('logo') : '' }}

		<input type="submit" name="name" value="edit">

		<!-- hidden -->
		<input type="hidden" name="_method" value="put">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->
		
	</form>

	<!-- End Form -->

@endsection

@stop