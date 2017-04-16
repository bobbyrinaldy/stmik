<!-- Index Testimoni -->

@extends('admin.main')

@section('pageInfo')

<title>Testimoni</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

Testimoni

@endsection

@section('content')

	<!-- NAVIGATOR FOR THIS FITUR-->
	<div class="col-xs-12 col-md-6 col-lg-3">
		<a href="{{url('/admin/testimoni/create')}}" class="btn btn-primary">Add</a>
	</div>
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">
		
		@foreach($testimoni as $testimonis)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						{{$testimonis->nama}}
					</div>
					<div>
						<a href="{{url('/admin/testimoni/'. $testimonis->id .'/edit')}}" class="btn btn-warning">Edit</a>
						<button type="submit" class="btn btn-danger">Delete</button>
						<form style="margin: 0; padding: 0;" class="btn btn-danger" action="{{url('/admin/testimoni/'. $testimonis->id .'')}}" method="post">
							<input style="display: inline;" type="hidden" name="_method" value="delete">
	                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
	                        <input class="icon_close_alt2" type="submit" name="name" value="">
	                    </form>
					</div>
					
					<div class="panel-body">
						<img src="{{url('../storage/app/upload/images/' . $testimonis->profile. '')}}">
						<p>{{$testimonis->komentar}}</p>
					</div>
					<div class="panel-body">
						<p>{{$testimonis->tag}}</p>
					</div>
				</div>
			</div>
		@endforeach

		{!! $testimoni->links() !!}

	</div>

	<!-- </div> -->

	

@endsection

@stop