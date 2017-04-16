<!-- CREATE SARANA DAN PRASARANA -->

@extends('admin.main')

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

	<form class="" action="{{url('/admin/sarana')}}" method="post">
		
		<input type="text" name="judul" value="" placeholder="Judul">
		{{ ($errors->has('judul')) ?  $errors->first('judul') : '' }}

		<br />

		<textarea name="isi" rows="10" cols="40" placeholder="Sarana dan prasarana"></textarea>
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