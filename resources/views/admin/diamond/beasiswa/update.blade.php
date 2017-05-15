<!-- update BEASISWA -->

@extends('admin.main')

@section('pageInfo')

<title>Beasiswa</title>

@section('rute')
  <li><a href="/adminnistrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li><a href="/admin/beasiswa">Beasiswa</a></li>
  <li class="active">Edit</li>

@endsection

@section('pageTitle')

Beasiswa

@endsection

@section('content')

	<!-- form -->


<form class="" action="{{url('/admin/beasiswa/'. $beasiswa->id .'')}}" method="post">

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Edit Beasiswa (ID : {{$beasiswa->id}}) </div>
        <div class="panel-body">

          <div class="form-group">
            <label for="">Judul : </label>
            <input type="nama" name="nama" value="{{$beasiswa->nama}}" placeholder="Judul Beasiswa" class="form-control">
        		{{ ($errors->has('nama')) ?  $errors->first('nama') : '' }}
          </div>

          <div class="form-group">
            <label for="">Deskripsi : </label>
            <textarea name="isi" rows="10" cols="40" placeholder="Isi">{!!$beasiswa->deskripsi!!}"</textarea>
        		{{ ($errors->has('isi')) ?  $errors->first('isi') : '' }}
          </div>

          <input type="submit" name="name" value="UPDATE" class="btn btn-warning btn-block">
          <a href="/admin/if" class="btn btn-default btn-block" >CANCEL</a>
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
