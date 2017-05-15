<!-- UPdate Kurikulum -->

@extends('admin.main')

@section('pageInfo')

<title>Kurikulum</title>

@section('rute')
    <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
    <li><a href="/admin/kurikulum">Kurikulum</a></li>
    <li class="active">Edit</li>

@endsection

@section('pageTitle')

Kurikulum

@endsection

@section('content')

	<!-- form -->

  <form class="" action="{{url('/admin/kurikulum/'. $kurikulum->id .'')}}" method="post">

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">Edit Kurikulum  </div>
          <div class="panel-body">

            <div class="form-group">
              <textarea name="deskripsi" rows="10" cols="40" placeholder="Komentar">{{$kurikulum->deskripsi}}</textarea>
          		{{ ($errors->has('deskripsi')) ?  $errors->first('deskripsi') : '' }}
            </div>

            <input type="submit" name="name" value="UPDATE" class="btn btn-warning btn-block">
            <a href="/admin/kurikulum" class="btn btn-default btn-block" >CANCEL</a>
          </div>
        </div>
      </div><!-- /.col-->
    </div>

		<!-- hidden -->
		<input type="hidden" name="_method" value="put">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->


	</form>

	<!-- End Form -->

@endsection

@stop
