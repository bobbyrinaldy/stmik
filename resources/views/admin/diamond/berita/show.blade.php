<!-- SHOW Berita -->

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

	<!-- NAVIGATOR FOR THIS FITUR-->
	<div class="col-xs-12 col-md-6 col-lg-3">
		<a href="{{url('/admin/berita')}}" class="btn btn-primary">Kembali</a>
	</div>
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						{{$berita->judul}}
					</div>
					<div>
						<a href="{{url('/admin/berita/'. $berita->id .'/edit')}}" class="btn btn-warning">Edit</a>
						<button type="submit" class="btn btn-danger">Delete</button>
						<form style="margin: 0; padding: 0;" class="btn btn-danger" action="{{url('/admin/berita/'. $berita->id .'')}}" method="post">
							<input style="display: inline;" type="hidden" name="_method" value="delete">
	                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
	                        <input class="icon_close_alt2" type="submit" name="name" value="">
	                    </form>
					</div>
					<div class="panel-body">
						<img src="{{url('../storage/app/upload/images/' . $berita->cover. '')}}">
						<p>{{$berita->deskripsi}}</p>
					</div>
					<di
				</div>
			</div>

	</div>

	<!-- </div> -->

@endsection

@stop