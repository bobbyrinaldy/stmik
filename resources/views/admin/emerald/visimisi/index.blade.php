<!-- INDex VISI MISI index.blade.php -->

<!-- index BTK -->

@extends('admin.main')

@section('pageInfo')

<title>btk</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Visi Misi

@endsection

@section('content')

	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($visimisi as $visimisis)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Bursa Tenaga Kerja
					</div>
					<div>
						<a href="{{url('/admin/visimisi/'. $visimisis->id .'/edit')}}" class="btn btn-warning">Edit</a>
					</div>
					<div class="panel-body">
						<p>{{$visimisis->visi}}</p>
					</div>

					<div class="panel-body">
						<p>{{$visimisis->misi}}</p>
					</div>
					
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

	

@endsection

@stop