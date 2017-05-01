<!-- CREATE Berita -->

@extends('admin.main')

@section('pageInfo')

<title>Berita</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

Berita

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/berita')}}" method="post" enctype="multipart/form-data">

		<input type="text" name="judul" value="" placeholder="Isi">
		{{ ($errors->has('judul')) ?  $errors->first('judul') : '' }}

		<br />

		<textarea name="isi" rows="10" cols="40" placeholder="Isi" style="word-wrap: break-word; width: 11em; "></textarea>
		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}

		<br />

		<input type="file" name="gambar" value="" placeholder="namanya">
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
