<!-- CREATE KERJASAMA -->

@extends('admin.main')

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

	<form class="" action="{{url('/admin/kerjasama')}}" method="post">

		<textarea name="isi" rows="10" cols="40" placeholder="Kerjasama"></textarea>
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