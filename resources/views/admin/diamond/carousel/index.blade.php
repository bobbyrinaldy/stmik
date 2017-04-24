<!-- INDEX KERJASAMA -->

@extends('admin.main')

@section('pageInfo')

<title>Carousel / Slide Show</title>

@section('rute')
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
@endsection

@section('pageTitle')

Carousel / Slide Show

@endsection

@section('content')

	<!-- NAVIGATOR FOR THIS FITUR-->
	<div class="col-xs-12 col-md-6 col-lg-3">
		<a href="{{url('/admin/carousel/create')}}" class="btn btn-primary">Add</a>
	</div>
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">

		@foreach($cr as $item)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">

						{{$item->nama}}
					</div>
					<div>
						<a href="{{url('/admin/carousel/'. $item->id .'/edit')}}" class="btn btn-warning">Edit</a>
						<button type="submit" class="btn btn-danger">Delete</button>
						<form style="margin: 0; padding: 0;" class="btn btn-danger" action="{{url('/admin/kerjasama/'. $item->id .'')}}" method="post">
							<input style="display: inline;" type="hidden" name="_method" value="delete">
	                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
	                        <input class="icon_close_alt2" type="submit" name="name" value="">
	                    </form>
					</div>

					<div class="panel-body">
            <img src="{{Storage::url('carousel/'.$item->gambar)}}">
					</div>
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

@endsection

@stop
