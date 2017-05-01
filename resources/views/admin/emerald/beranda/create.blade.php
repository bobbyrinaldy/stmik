<!-- CREATE BERANDA -->

@extends('admin.main2')

@section('pageInfo')

<title>Sejarah</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>

@endsection

@section('pageTitle')

Sejarah

@endsection

@section('content')

	<!-- form -->


  </script>

	<form class="" action="{{url('/admin/beranda')}}" method="post" enctype="multipart/form-data">

    <div class="col-md-12">
      <div class="col-md-4">
        <h4>Gambar 1</h4>

        <input type="file" name="gambar" value="" placeholder="namanya">
    		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}

      </div>

      <div class="col-md-4">
        <h4>Gambar 2</h4>

        <input type="file" name="gambar" value="" placeholder="namanya">
    		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}
      </div>

      <div class="col-md-4">

        <h4>Gambar 3</h4>

        <input type="file" name="gambar" value="" placeholder="namanya">
    		{{ ($errors->has('gambar')) ?  $errors->first('gambar') : '' }}

      </div>

    </div>

    <div class="col-md-12">
      <div class="col-md-4">
        <h4>Icon 1</h4>

        <select name="icons1">
          <option value="<i class='fa fa-building'></i>">Building</option>
          <option value="<i class='fa fa-file'></i>">File</option>
          <option value="<i class='fa fa-bus'></i>">Bus</option>
          <option value="<i class='fa fa-location-arrow'></i>">Location Arrow</option>
          <option value="<i class='fa fa-star'></i>">Star</option>
          <option value="<i class='fa fa-desktop'></i>">Desktop</option>
        </select>

        <h4>Deskripsi 1</h4>
        <textarea name="desc1" rows="10" cols="40" placeholder="Komentar"></textarea>
    		{{ ($errors->has('desc1')) ?  $errors->first('desc1') : '' }}
      </div>
      <div class="col-md-4">
        <h4>Icon 2</h4>

        <select name="icons2">
          <option value="<i class='fa fa-building'></i>">Building</option>
          <option value="<i class='fa fa-file'></i>">File</option>
          <option value="<i class='fa fa-bus'></i>">Bus</option>
          <option value="<i class='fa fa-location-arrow'></i>">Location Arrow</option>
          <option value="<i class='fa fa-star'></i>">Star</option>
          <option value="<i class='fa fa-desktop'></i>">Desktop</option>
        </select>

        <h4>Deskripsi 2</h4>
        <textarea name="desc2" rows="10" cols="40" placeholder="Komentar"></textarea>
    		{{ ($errors->has('desc2')) ?  $errors->first('desc2') : '' }}
      </div>
      <div class="col-md-4">
        <h4>Icon 3</h4>

        <select name="icons3">
          <option value="<i class='fa fa-building'></i>">Building</option>
          <option value="<i class='fa fa-file'></i>">File</option>
          <option value="<i class='fa fa-bus'></i>">Bus</option>
          <option value="<i class='fa fa-location-arrow'></i>">Location Arrow</option>
          <option value="<i class='fa fa-star'></i>">Star</option>
          <option value="<i class='fa fa-desktop'></i>">Desktop</option>
        </select>

        <h4>Deskripsi 3</h4>
        <textarea name="desc3" rows="10" cols="40" placeholder="Komentar"></textarea>
    		{{ ($errors->has('desc3')) ?  $errors->first('desc3') : '' }}
      </div>
      <div class="col-md-4">
        <h4>Icon 4</h4>

        <select name="icons4">
          <option value="<i class='fa fa-building'></i>">Building</option>
          <option value="<i class='fa fa-file'></i>">File</option>
          <option value="<i class='fa fa-bus'></i>">Bus</option>
          <option value="<i class='fa fa-location-arrow'></i>">Location Arrow</option>
          <option value="<i class='fa fa-star'></i>">Star</option>
          <option value="<i class='fa fa-desktop'></i>">Desktop</option>
        </select>

        <h4>Deskripsi 4</h4>
        <textarea name="desc4" rows="10" cols="40" placeholder="Komentar"></textarea>
    		{{ ($errors->has('desc4')) ?  $errors->first('desc4') : '' }}
      </div>
      <div class="col-md-4">
        <h4>Icon 5</h4>

        <select name="icons5">
          <option value="<i class='fa fa-building'></i>">Building</option>
          <option value="<i class='fa fa-file'></i>">File</option>
          <option value="<i class='fa fa-bus'></i>">Bus</option>
          <option value="<i class='fa fa-location-arrow'></i>">Location Arrow</option>
          <option value="<i class='fa fa-star'></i>">Star</option>
          <option value="<i class='fa fa-desktop'></i>">Desktop</option>
        </select>

        <h4>Deskripsi 5</h4>
        <textarea name="desc5" rows="10" cols="40" placeholder="Komentar"></textarea>
    		{{ ($errors->has('desc5')) ?  $errors->first('desc5') : '' }}
      </div>
      <div class="col-md-4">
        <h4>Icon 6</h4>

        <select name="icons6">
          <option value="<i class='fa fa-building'></i>">Building</option>
          <option value="<i class='fa fa-file'></i>">File</option>
          <option value="<i class='fa fa-bus'></i>">Bus</option>
          <option value="<i class='fa fa-location-arrow'></i>">Location Arrow</option>
          <option value="<i class='fa fa-star'></i>">Star</option>
          <option value="<i class='fa fa-desktop'></i>">Desktop</option>
        </select>

        <h4>Deskripsi 6</h4>
        <textarea name="desc6" rows="10" cols="40" placeholder="Komentar"></textarea>
    		{{ ($errors->has('desc6')) ?  $errors->first('desc6') : '' }}
      </div>

    </div>





		<input type="submit" name="name" value="post">

		<!-- hidden -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<!-- end -->


	</form>

	<!-- End Form -->

@endsection

@stop
