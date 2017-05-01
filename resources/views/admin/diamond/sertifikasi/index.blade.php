<!-- Sertifikasi -->

<!-- INDEX SARANA DAN PRASARANA -->

@extends('admin.main')

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

  <div class="col-lg-10">

    <div class="panel panel-default">
      <div class="panel-heading">
        <!-- NAVIGATOR FOR THIS FITUR-->
      	<div class="col-xs-12 col-md-6 col-lg-3">
      		<a href="{{url('/admin/sertifikasi/create')}}" class="btn btn-primary">Add</a>
      	</div>

      <form method="GET" url="/admin/sertifikasi" class="navbar-form" role="search">


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
                  <th>Deskripsi</th>
                  <th>Logo</th>
                  <th>Aksi</th>
              </tr>
              </thead>

              <tbody>
              @foreach($sertifikasi as $sertifikasis)
              <tr>
                <th>{{$sertifikasis->nama}}</th>
                <th>{!!str_limit($sertifikasis->deskripsi, 35)!!}</th>
                <th><img src="/storage/sertifikasi/{{$sertifikasis->logo}}" height="50px" height="50px"></th>
                <th>
                  <a href="{{url('/admin/sertifikasi/'. $sertifikasis->id .'/edit')}}" class="btn btn-warning">Edit</a>

            <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                  <form style="display: inline;" id="form-delete" action="{{url('/admin/sertifikasi/'. $sertifikasis->id)}}" method="post">

                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <input class="btn btn-danger" type="submit" name="_method" value="delete">
                  </form>
                </th>
              </tr>
              @endforeach
              </tbody>

          </table>
      </div>
    </div>

    {!! $sertifikasi->links() !!}

  </div>


	<!-- endnav -->
	<!-- <div class="row"> -->

	<!-- </div> -->



@endsection

@stop
