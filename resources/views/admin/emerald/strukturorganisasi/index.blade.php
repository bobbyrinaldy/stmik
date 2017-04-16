<!-- Index Struktur Organisasi -->

<!-- Index sisfo -->

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

	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($strukturorganisasi as $strukturorganisasis)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Struktur Organisasi
					</div>
					<div>
						<a href="{{url('/admin/strukturorganisasi/'. $strukturorganisasis->id .'/edit')}}" class="btn btn-warning">Edit</a>
					</div>
					<div class="panel-body">
						<img src="{{url('../storage/app/upload/images/' . $strukturorganisasis->gambar. '')}}">
					</div>
					
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

	

@endsection

@stop