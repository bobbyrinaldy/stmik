<!-- INDEX KERJASAMA -->

@extends('admin.main')

@section('pageInfo')

<title>Kerjasama</title>

@section('rute')
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
@endsection

@section('pageTitle')

Kerjasama

@endsection

@section('content')

	<!-- NAVIGATOR FOR THIS FITUR-->
	
	<!-- endnav -->
	<!-- <div class="row"> -->
	<div class="col-lg-10">

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<a href="{{url('/admin/kerjasama/create')}}" class="btn btn-primary">Add</a>
				</div>

			
			<form method="GET" url="/admin/kerjasama" class="navbar-form" role="search">
				
			
		      <div class="input-group custom-search-form">
		        <input type="text" name="search" class="form-control" placeholder="Cari Perusahaan . . .">
		        <span class="input-group-btn">
		          <button type="submit" class="btn btn-default-sm">
		          <svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>
		          </button>
		        </span>
		      </div>

		     </form>

			</div>
			<div class="panel-body">
					<table class="table">
					    <thead>
					    <tr>
					        <th data-align="right">Perusahaan</th>
					        <th>Deskripsi</th>
					        <th>Kategori</th>
					        <th>Logo</th>
					        <th>Aksi</th>
					    </tr>
				    	</thead>

				    	<tbody>
				    	@foreach($kerjasama as $kerjasamas)
				    	<tr>
				    		<th>{{$kerjasamas->perusahaan}}</th>
				    		<th>{!!str_limit($kerjasamas->deskripsi, 35)!!}</th>
				    		<th>{!!$kerjasamas->kategori!!}</th>
				    		<th><img src="/storage/kerjasama/{{$kerjasamas->logo}}" height="50px" height="50px"></th>
				    		<th><a href="{{url('/admin/kerjasama/'. $kerjasamas->id .'/edit')}}" class="btn btn-warning">Edit</a>
				    		<a class="btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('form-delete').submit();">
                                            Delete
                                        </a>
						<!-- <button type="submit" class="btn btn-danger">Delete</button> -->
						<form id="form-delete" style="display: none;" class="btn btn-danger" action="{{url('/admin/kerjasama/'. $kerjasamas->id .'')}}" method="post">
							<input style="display: inline;" type="hidden" name="_method" value="delete">
	                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
	                        <input class="icon_close_alt2" type="submit" name="name" value="">
	                    </form></th>
				    	</tr>
				    	@endforeach
				    	</tbody>

					</table>
			</div>
		</div>

		{!! $kerjasama->links() !!}

	</div>

	<!-- </div> -->

@endsection

@stop
