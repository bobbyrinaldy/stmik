<!-- SEJARAH index -->

@extends('admin.main')

@section('pageInfo')

<title>Beranda</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Beranda

@endsection

@section('content')

	@if(!empty($add))
		<div class="col-xs-12 col-md-6 col-lg-3">
			<a href="{{url('/admin/beranda/create')}}" class="btn btn-primary">Add</a>
		</div>
	@endif
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">

		@foreach($beranda as $berandas)
			<div class="col-md-14">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Beranda
					</div>

					<div>
						<a href="{{url('/admin/beranda/'. $berandas->id .'/edit')}}" class="btn btn-warning">Edit</a>
            <p>{{$berandas->updated_at}}</p>
					</div>

          <div class="panel-body" class="col-md-4">
						<img width="100%" height="100%" href="{{ Storage::url($berandas->gambar1) }}">
					</div>

          <div class="panel-body" class="col-md-4">
						<img width="100%" height="100%" href="{{ Storage::url($berandas->gambar2) }}">
					</div>

          <div class="panel-body" class="col-md-4">
            <img width="100%" height="100%" href="{{ Storage::url($berandas->gambar3) }}">
          </div>


          <div class="panel-body">
    					<table class="table">
    					    <thead>
    					    <tr>
    					        <th data-align="right">icon</th>
    					        <th>Deskripsi</th>
    					    </tr>
    				    	</thead>

    				    	<tbody>
                    <tr>
      					        <th data-align="right"><img href="{{Storage::url($berandas->icon1)}}"/></th>
      					        <th>{!!$berandas->desc1!!}</th>
      					    </tr>
                    <tr>
      					        <th data-align="right"><img href="{{Storage::url($berandas->icon2)}}"/></th>
      					        <th>{!!$berandas->desc2!!}</th>
      					    </tr>
                    <tr>
      					        <th data-align="right"><img href="{{Storage::url($berandas->icon3)}}"/></th>
      					        <th>{!!$berandas->desc3!!}</th>
      					    </tr>
                    <tr>
      					        <th data-align="right"><img href="{{Storage::url($berandas->icon4)}}"/></th>
      					        <th>{!!$berandas->desc4!!}</th>
      					    </tr>
                    <tr>
      					        <th data-align="right"><img href="{{Storage::url($berandas->icon5)}}"/></th>
      					        <th>{!!$berandas->desc5!!}</th>
      					    </tr>
                    <tr>
      					        <th data-align="right"><img href="{{Storage::url($berandas->icon6)}}"/></th>
      					        <th>{!!$berandas->desc6!!}</th>
      					    </tr>
    				    	</tbody>

    					</table>
    			</div>

          <div class="panel-body" class="col-md-4">
            <img width="100%" height="100%" href="{{ Storage::url($berandas->maingambar1) }}">
            <p>{{$berandas->maindesc1}}</p>
          </div>

          <div class="panel-body" class="col-md-4">
            <img width="100%" height="100%" href="{{ Storage::url($berandas->maingambar2) }}">
            <p>{{$berandas->maindesc2}}</p>
          </div>

          <div class="panel-body" class="col-md-4">
            <img width="100%" height="100%" href="{{ Storage::url($berandas->maingambar3) }}">
            <p>{{$berandas->maindesc3}}</p>
          </div>

				</div>
			</div>
		@endforeach

	</div>

	<!-- </div> -->



@endsection

@stop
