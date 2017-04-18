<!-- SI update.blade.php -->

@extends('admin.main')

@section('pageInfo')

<title>Sistem Informasi</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Sistem Informasi

@endsection

@section('content')

	<!-- form -->

	<!-- WYSIWYG -->

	<form class="" action="{{url('/admin/si/'. $si->id .'')}}" method="post">

		<textarea name="deskripsi" placeholder="Komentar">{{$si->deskripsi}}</textarea>
		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}

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