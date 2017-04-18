<!-- CREATE SI -->

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

	<form class="" action="{{url('/admin/si')}}" method="post">
	
		<textarea name="deskripsi" placeholder="Komentar"></textarea>
		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}

		<br />

		<input type="submit" name="name" value="post">

		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->
		

	</form>

	<!-- End Form -->

@endsection

@stop