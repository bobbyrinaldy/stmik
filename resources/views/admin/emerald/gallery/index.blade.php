<!-- index BTK -->

@extends('admin.main')

@section('pageInfo')

<title>Gallery</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Gallery

@endsection

@section('content')

		<div class="col-xs-12 col-md-6 col-lg-3">
			<a href="{{url('/admin/gallery/create')}}" class="btn btn-primary">Add</a>
		</div>
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">

		@foreach($gallery as $item)
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						{{$item->judul}}
					</div>
					<div>
						<a href="{{url('/admin/btk/'. $item->id .'/edit')}}" class="btn btn-warning">Edit</a>
					</div>
					<div class="panel-body">
            <img height="100%" width="100%" src="{{Storage::url('gallery/'.$item->gambar)}}">
					</div>
				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->

@endsection

@stop
