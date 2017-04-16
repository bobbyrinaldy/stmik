<!-- UPDATE kerjaSAMA -->

<!-- update BEASISWA -->

@extends('main')

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

	<form class="" action="{{url('/kerjasama/'. $kerjasama->id .'')}}" method="post">

		<textarea name="isi" rows="10" cols="40" placeholder="kerjasama">{{$kerjasama->logo}}</textarea>
		{{ ($errors->has('isi')) ?  $errors-> first('isi') : '' }}

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