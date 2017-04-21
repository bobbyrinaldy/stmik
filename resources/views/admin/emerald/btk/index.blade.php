<!-- index BTK -->

@extends('admin.main')

@section('pageInfo')

<title>Bursa Tenaga Kerja</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Bursa Tenaga Kerja

@endsection

@section('content')

	@if(!empty($add))
		<div class="col-xs-12 col-md-6 col-lg-3">
			<a href="{{url('/admin/btk/create')}}" class="btn btn-primary">Add</a>
		</div>
	@endif
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($btk as $btks)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Bursa Tenaga Kerja
					</div>
					<div>
						<a href="{{url('/admin/btk/'. $btks->id .'/edit')}}" class="btn btn-warning">Edit</a>
					</div>
					<div class="panel-body">
						<p>{!! $btks->deskripsi !!}</p>
					</div>
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->	

@endsection

@stop