<!-- CREATE SERTIFIKASI -->

@extends('admin.main')

@section('pageInfo')

<title>Sarana Dan Prasarana</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

Sertifikasi

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/sertifikasi')}}" method="post">

		<input type="text" name="isi" value="" placeholder="Sertifikasi">
		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}

		<br />

		<input type="submit" name="name" value="post">

		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->
		

	</form>

	<!-- End Form -->

@endsection

@stop