<!-- INDEX BEASISWA -->

@extends('admin.main')

@section('pageInfo')

<title>ADMIN USER</title>

@section('rute')
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active">Icons</li>
@endsection

@section('pageTitle')

Administrator

@endsection

@section('content')

	<!-- NAVIGATOR FOR THIS FITUR-->


	<div class="col-lg-10">

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="col-xs-12 col-md-6 col-lg-3">
					<a href="{{url('/register')}}" class="btn btn-primary">Add</a>
				</div>


			<form method="GET" url="/superadmin/modifauth" class="navbar-form" role="search">


		      <div class="input-group custom-search-form">
		        <input type="text" name="search" class="form-control" placeholder="Cari Nama . . .">
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
					        <th data-align="right">Nama</th>
					        <th>Email</th>
					        <th>Aksi</th>
					    </tr>
				    	</thead>

				    	<tbody>
				    	@foreach($modifauth as $modifauths)
				    	<tr>
				    		<th>{{$modifauths->name}}</th>
				    		<th>{!!str_limit($modifauths->email)!!}</th>
				    		<th>
				    		<a href="{{url('/superadmin/modifauth/'. $modifauths->id .'/edit')}}" class="btn btn-warning">Edit</a>
				    		<a class="btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('form-delete').submit();">
                                            Delete
                                        </a>
						<!-- <button type="submit" class="btn btn-danger">Delete</button> -->
						<form id="form-delete" style="display: none;" class="btn btn-danger" action="{{url('/superadmin/modifauth/'. $modifauths->id .'/delete')}}" method="post">
	                        <input type="hidden" name="_token" value="{{ csrf_token()}}">
	                        <input class="icon_close_alt2" type="submit" name="name" value="">
	                    </form></th>
				    	</tr>
				    	@endforeach
				    	</tbody>

					</table>
			</div>
		</div>

		{!! $modifauth->links() !!}

	</div>


	<!-- </div> -->

@endsection

@stop
