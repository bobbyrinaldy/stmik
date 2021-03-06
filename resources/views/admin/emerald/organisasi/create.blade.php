<!-- Kurikulum Organisasi  -->

@extends('admin.main')

@section('pageInfo')

<title>Beasiswa</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

Beasiswa

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/kurikulum')}}" method="post">

		<textarea name="deskripsi" rows="10" cols="40" placeholder="Komentar">{{$kurikulum->deskripsi}}</textarea>
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