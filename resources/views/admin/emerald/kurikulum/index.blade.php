<!-- IndexKurikulum -->

@extends('admin.main')

@section('pageInfo')

<title>Kurikulum</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Kurikulum

@endsection

@section('content')

	@if(!empty($add))
		<div class="col-xs-12 col-md-6 col-lg-3">
			<a href="{{url('/admin/kurikulum/create')}}" class="btn btn-primary">Add</a>
		</div>
	@endif
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($kurikulum as $kurikulums)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Kurikulum
					</div>
					<div>
						<a href="{{url('/admin/kurikulum/'. $kurikulums->id .'/edit')}}" class="btn btn-warning">Edit</a>
					</div>
					<div class="panel-body">
						<p>{!! $kurikulums->deskripsi !!}</p>
					</div>
					
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

	

@endsection

@stop