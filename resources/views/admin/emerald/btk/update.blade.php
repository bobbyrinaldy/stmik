<!-- update btk -->

@extends('admin.main')

@section('pageInfo')

<title>Bursa Tenaga Kerja</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Bursa Tenaga Kerja

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/btk/'. $btk->id .'')}}" method="post">

		<textarea name="deskripsi" rows="10" cols="40" placeholder="Komentar">{{$btk->deskripsi}}</textarea>
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