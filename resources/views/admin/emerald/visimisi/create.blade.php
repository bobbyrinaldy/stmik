<!-- CREATE Visimisi -->

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

	<form class="" action="{{url('/admin/visimisi')}}" method="post">
	
		<h3>Visi</h3> <br />
		<textarea name="visi" rows="10" cols="40" placeholder="Visi"></textarea>
		{{ ($errors->has('visi')) ?  $errors->first('visi') : '' }}

		<br />

		<h3>Misi</h3> <br />
		<textarea name="misi" rows="10" cols="40" placeholder="Misi"></textarea>
		{{ ($errors->has('misi')) ?  $errors->first('misi') : '' }}

		<br />

		<input type="submit" name="name" value="post">

		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->
		

	</form>

	<!-- End Form -->

@endsection

@stop