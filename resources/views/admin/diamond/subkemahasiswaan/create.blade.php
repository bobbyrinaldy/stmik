<!-- Subhima CREATE -->

@extends('admin.main')

@section('pageInfo')

<title>Beasiswa</title>

@section('rute')
	<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
	<li class="active">Icons</li>

@endsection

@section('pageTitle')

Kemahasiswaan

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/subkemahasiswaan')}}" method="post">

		<input type="text" name="id_org" value="">
		{{ ($errors->has('id_org')) ?  $errors->first('id_org') : '' }}

		<br />

		<input type="text" name="nama" value="">
		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}

		<br />

		<textarea name="deskripsi" rows="10" cols="40" placeholder="deskripsi"></textarea>
		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}

		<br />

		<input type="text" name="logo" value="">
		{{ ($errors->has('logo')) ?  $errors->first('logo') : '' }}

		<br />

		<input type="submit" name="name" value="post">

		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->
		

	</form>

	<!-- End Form -->

@endsection

@stop