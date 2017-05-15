<!-- CREATE Visimisi -->

@extends('admin.main')

@section('pageInfo')

<title>Visi Misi</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

@endsection

@section('content')

	<!-- form -->

	<form class="" action="{{url('/admin/visimisi')}}" method="post">

    <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Create New Visi Misi</div>
					<div class="panel-body">

            <div class="form-group">
              <label for="visi"><h3>Visi :</h3></label>
          		<textarea name="visi" placeholder="Visi" class="form-control"></textarea>
          		{{ ($errors->has('visi')) ?  $errors->first('visi') : '' }}
            </div>

            <div class="form-group">
              <label for="visi"><h3>Misi :</h3></label>

              <textarea name="misi" rows="10" cols="40" placeholder="Misi"></textarea>
          		{{ ($errors->has('misi')) ?  $errors->first('misi') : '' }}
            </div>

            <input type="submit" name="name" value="SAVE" class="btn btn-success btn-block">
            <a href="/admin/visimisi" class="btn btn-default btn-block" >CANCEL</a>
          </div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->


		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->


	</form>

	<!-- End Form -->

@endsection

@stop
