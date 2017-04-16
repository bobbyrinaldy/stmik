<!-- Index Organisasi -->

@extends('admin.main')

@section('pageInfo')

<title>BeasiswA</title>

@section('rute')
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
@endsection

@section('pageTitle')

Kemahasiswaan

@endsection

@section('content')

	<!-- NAVIGATOR FOR THIS FITUR-->
	<div class="col-xs-12 col-md-6 col-lg-3">
		<a href="{{url('/admin/kemahasiswaan/create')}}" class="btn btn-primary">Add Himpunan</a>
	</div>
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($kemahasiswaan as $kemahasiswaans)
			<div class="col-md-14">
				<div class="panel panel-info">
					<div class="panel-heading">
						{{$kemahasiswaans->nama}}
					</div>
					<div>
						<a href="{{url('/admin/kemahasiswaan/'. $kemahasiswaans->id .'/edit')}}" class="btn btn-warning">Edit</a>
						<button type="submit" class="btn btn-danger">Delete</button>
						<form style="margin: 0; padding: 0;" class="btn btn-danger" action="{{url('/admin/kemahasiswaan/'. $kemahasiswaans->id .'')}}" method="post">
							<input style="display: inline;" type="hidden" name="_method" value="delete">
	                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
	                        <input class="icon_close_alt2" type="submit" name="name" value="">
	                    </form>
					</div>
					<div class="panel-body">
						<img src="{{url('../storage/app/upload/images/' . $kemahasiswaans->logo. '')}}">
						<p>{{$kemahasiswaans->deskripsi}}</p>
					</div>
				</div>
			</div>
		@endforeach

	</div>

	<div class="col-xs-12 col-md-6 col-lg-3">
		<a href="{{url('/admin/subkemahasiswaan/create')}}" class="btn btn-primary">Add Subhima</a>
	</div>

	<div class="col-lg-10">
		
		@foreach($subkemahasiswaan as $subkemahasiswaans)
			<div class="col-md-14">
				<div class="panel panel-warning">
					<div class="panel-heading">
						{{$subkemahasiswaans->id_org}} {{$subkemahasiswaans->nama}}
					</div>
					<div>
						<a href="{{url('/admin/subkemahasiswaan/'. $subkemahasiswaans->id .'/edit')}}" class="btn btn-warning">Edit</a>
						<button type="submit" class="btn btn-danger">Delete</button>
						<form style="margin: 0; padding: 0;" class="btn btn-danger" action="{{url('/admin/subkemahasiswaan/'. $subkemahasiswaans->id .'')}}" method="post">
							<input style="display: inline;" type="hidden" name="_method" value="delete">
	                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
	                        <input class="icon_close_alt2" type="submit" name="name" value="">
	                    </form>
					</div>
					<div class="panel-body">
						<img src="{{url('../storage/app/upload/images/' . $subkemahasiswaans->logo. '')}}">
						<p>{{$subkemahasiswaans->deskripsi}}</p>
					</div>
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

@endsection

@stop