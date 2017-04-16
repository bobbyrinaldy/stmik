<!-- update btk -->

@extends('main')

@section('pageInfo')

<title>Sarana Dan Prasarana</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Sarana Dan Prasarana

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/btk/'. $btk->id .'')}}" method="post">

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