<!-- Contact Us -->

@extends('admin.main')

@section('pageInfo')

<title>Kontak Kami</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

Kontak Kami

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/kontak')}}" method="post">

		<textarea name="deskripsi" rows="10" cols="40" placeholder="Komentar"></textarea>
		{{ ($errors->has('kontak')) ?  $errors->first('kontak') : '' }}

		<br />

		<input type="submit" name="name" value="post">

		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->
		

	</form>

	<!-- End Form -->

@endsection

@stop