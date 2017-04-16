<!-- Sertifikasi -->

<!-- INDEX SARANA DAN PRASARANA -->

@extends('main')

@section('pageInfo')

<title>Sarana Dan Prasarana</title>

@section('rute')
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
@endsection

@section('pageTitle')

Sertifikasi

@endsection

@section('content')

	<!-- NAVIGATOR FOR THIS FITUR-->
	<div class="col-xs-12 col-md-6 col-lg-3">
		<a href="{{url('/sertifikasi/create')}}" class="btn btn-primary">Add</a>
	</div>
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($sertifikasi as $sertifikasis)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						{{$sertifikasis->deskripsi}}
					</div>
					<div>
						<a href="{{url('/sertifikasi/'. $sertifikasis->id .'/edit')}}" class="btn btn-warning">Edit</a>
						<button type="submit" class="btn btn-danger">Delete</button>
						<form style="margin: 0; padding: 0;" class="btn btn-danger" action="{{url('/sertifikasi/'. $sertifikasis->id .'')}}" method="post">
							<input style="display: inline;" type="hidden" name="_method" value="delete">
	                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
	                        <input class="icon_close_alt2" type="submit" name="name" value="">
	                    </form>
					</div>

				</div>
			</div>
		@endforeach

		{!! $sertifikasi->links() !!}

	</div>

	<!-- </div> -->

	

@endsection

@stop