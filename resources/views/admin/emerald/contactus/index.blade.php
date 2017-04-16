<!-- idex kontak -->

@extends('main')

@section('pageInfo')

<title>btk</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Kontak Kami

@endsection

@section('content')

	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($kontak as $kontaks)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Kontak Kami
					</div>
					<div>
						<a href="{{url('/kontak/'. $kontaks->id .'/edit')}}" class="btn btn-warning">Edit</a>
					</div>
					<div class="panel-body">
						<p>{{$kontaks->deskripsi}}</p>
					</div>
					
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

	

@endsection

@stop