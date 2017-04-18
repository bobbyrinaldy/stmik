<!-- INDex VISI MISI index.blade.php -->

@extends('admin.main')

@section('pageInfo')

<title>Visi Misi</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Visi Misi

@endsection

@section('content')

	@if(!empty($add))
		<div class="col-xs-12 col-md-6 col-lg-3">
			<a href="{{url('/admin/visimisi/create')}}" class="btn btn-primary">Add</a>
		</div>
	@endif
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($visimisi as $visimisis)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Visi Misi
					</div>
					<div>
						<a href="{{url('/admin/visimisi/'. $visimisis->id .'/edit')}}" class="btn btn-warning">Edit</a>
					</div>
					<div class="panel-body">
						<h3>Visi</h3>
						<p>{{$visimisis->visi}}</p>
					</div>

					<div class="panel-body">
						<h3>Misi</h3>
						<p>{{$visimisis->misi}}</p>
					</div>
					
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

	

@endsection

@stop