<!-- UPdate Visi Misi -->

@extends('admin.main')

@section('pageInfo')

<title>Visi Misi</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Visi Misi

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/visimisi/'. $visimisi->id .'')}}" method="post">

		<h3>Visi</h3> <br />
		<textarea name="visi" rows="10" cols="40" placeholder="Visi">{{$visimisi->visi}}</textarea>
		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}

		<br />

		<h3>Misi</h3> <br />
		<textarea name="misi" rows="10" cols="40" placeholder="Misi">{{$visimisi->misi}}</textarea>
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