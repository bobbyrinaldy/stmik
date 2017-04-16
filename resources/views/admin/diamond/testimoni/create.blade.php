<!-- Create Testimoni -->

@extends('admin.main')

@section('pageInfo')

<title>Testimoni</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

Testimoni

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/testimoni')}}" method="post">
		
		<input type="text" name="nama" value="" placeholder="nama">
		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}

		<br />

		<textarea name="komentar" rows="10" cols="40" placeholder="Komentar"></textarea>
		{{ ($errors->has('komentar')) ?  $errors->first('komentar') : '' }}

		<br />

		<textarea name="profile" rows="10" cols="40" placeholder="profile"></textarea>
		{{ ($errors->has('profile')) ?  $errors->first('profile') : '' }}

		<br />

		<input type="text" name="tag" value="" placeholder="tag">
		{{ ($errors->has('tag')) ?  $errors->first('tag') : '' }}

		<br />

		<input type="submit" name="name" value="post">

		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->
		

	</form>

	<!-- End Form -->

@endsection

@stop