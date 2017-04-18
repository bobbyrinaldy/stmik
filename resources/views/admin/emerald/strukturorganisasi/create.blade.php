<!-- CREATE Struktur Organisasi -->

@extends('admin.main')

@section('pageInfo')

<title>Struktur Organisasi</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Struktur Organisasi

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/strukturorganisasi')}}" method="post" enctype="multipart/form-data">

		<input type="file" name="gambar" value="" placeholder="namanya" required>
		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}

		<br />

		<input type="submit" name="name" value="post">

		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->

	</form>

	<!-- End Form -->

@endsection

@stop