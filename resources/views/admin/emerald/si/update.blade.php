<!-- SI update.blade.php -->

@extends('admin.main')

@section('pageInfo')

<title>Sistem Informasi</title>

@section('rute')
    <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li class="active">Icons</li>

@endsection

@section('pageTitle')

Sistem Informasi

@endsection

@section('content')

  <form class="" action="{{url('/admin/si/'. $si->id .'')}}" method="post">


    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Sistem Informasi  </div>
          <div class="panel-body">

            <div class="form-group">
              <textarea name="deskripsi" placeholder="Komentar">{{$si->deskripsi}}</textarea>
          		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}
            </div>

            <input type="submit" name="name" value="SAVE" class="btn btn-warning btn-block">
            <a href="/admin/si" class="btn btn-default btn-block" >CANCEL</a>
          </div>
        </div>
      </div><!-- /.col-->
    </div><!-- /.row -->


    <!-- hidden -->
    <input type="hidden" name="_method" value="put">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

  </form>

	<!-- form -->

	<!-- WYSIWYG -->



	<!-- End Form -->

@endsection

@stop
