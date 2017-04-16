<!-- SI INDEX -->

<!-- index BTK -->

<!-- Index Testimoni -->

@extends('main')

@section('pageInfo')

<title>btk</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Sistem Informasi

@endsection

@section('content')

	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($si as $sis)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Sistem Informasi
					</div>
					<div>
						<a href="{{url('/si/'. $sis->id .'/edit')}}" class="btn btn-warning">Edit</a>
					</div>
					<div class="panel-body">
						<p>{{$sis->deskripsi}}</p>
					</div>
					
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

	

@endsection

@stop