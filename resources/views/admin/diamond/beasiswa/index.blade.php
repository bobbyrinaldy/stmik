<!-- INDEX BEASISWA -->

@extends('admin.main')

@section('pageInfo')

<title>BeasiswA</title>

@section('rute')
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
@endsection

@section('pageTitle')

Beasiswa

@endsection

@section('content')

	<!-- NAVIGATOR FOR THIS FITUR-->
	<div class="col-xs-12 col-md-6 col-lg-3">
		<a href="{{url('/admin/beasiswa/create')}}" class="btn btn-primary">Add</a>
	</div>
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($beasiswa as $beasiswas)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						{{$beasiswas->deskripsi}}
					</div>
					<div>
						<a href="{{url('/admin/beasiswa/'. $beasiswas->id .'/edit')}}" class="btn btn-warning">Edit</a>
						<button type="submit" class="btn btn-danger">Delete</button>
						<form style="margin: 0; padding: 0;" class="btn btn-danger" action="{{url('/admin/beasiswa/'. $beasiswas->id .'')}}" method="post">
							<input style="display: inline;" type="hidden" name="_method" value="delete">
	                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
	                        <input class="icon_close_alt2" type="submit" name="name" value="">
	                    </form>
					</div>
				</div>
			</div>
		@endforeach

		{!! $beasiswa->links() !!}

	</div>

	<!-- </div> -->

@endsection

@stop