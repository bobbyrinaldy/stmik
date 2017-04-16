<!-- Index sisfo -->

@extends('main')

@section('pageInfo')

<title>Sisfo</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Sisfo

@endsection

@section('content')

	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($sisfo as $sisfos)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Bursa Tenaga Kerja
					</div>
					<div>
						<a href="{{url('/sisfo/'. $sisfos->id .'/edit')}}" class="btn btn-warning">Edit</a>
					</div>
					<div class="panel-body">
						<p>{{$sisfos->deskripsi}}</p>
					</div>
					
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

	

@endsection

@stop