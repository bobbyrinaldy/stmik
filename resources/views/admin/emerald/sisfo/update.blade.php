<!-- Update sisfo -->

@extends('admin.main')

@section('pageInfo')

<title>Sisfo</title>

@section('rute')
  <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li><a href="/admin/sisfo">Sistem Informasi Akademik</a></li>
  <li class="active">Edit</li>

@endsection

@section('pageTitle')

Sisfo

@endsection

@section('content')

	<!-- form -->

  <form class="" action="{{url('/admin/sisfo/'. $sisfo->id .'')}}" method="post">

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Sistem Informasi Akademik  </div>
          <div class="panel-body">

            <div class="form-group">
              <textarea name="deskripsi" rows="10" cols="40" placeholder="Komentar">{{$sisfo->deskripsi}}</textarea>
          		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}
            </div>

            <input type="submit" name="name" value="UPDATE" class="btn btn-warning btn-block">
            <a href="/admin/sisfo" class="btn btn-default btn-block" >CANCEL</a>
          </div>
        </div>
      </div><!-- /.col-->
    </div><!-- /.row -->


    <!-- hidden -->
    <input type="hidden" name="_method" value="put">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

  </form>
	<!-- End Form -->

@endsection

@stop
