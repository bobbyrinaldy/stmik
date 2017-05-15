<!-- Index Struktur Organisasi -->

<!-- Index sisfo -->

@extends('admin.main')

@section('pageInfo')

<title>Struktur Organisasi</title>

@section('rute')
      <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
      <li class="active">Icons</li>
@endsection

@section('pageTitle')

Struktur Organisasi

@endsection

@section('content')
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              @if(!empty($add))
                <a href="{{url('/admin/strukturorganisasi/create')}}" class="btn btn-primary">Create New</a>

              @else
                @foreach ($strukturorganisasi as $item)
                <a href="{{url('/admin/strukturorganisasi/'. $item->id .'/edit')}}" class="btn btn-warning">Edit</a>
                @endforeach

              @endif
            </div>
            <div class="panel-body">
              <table>
                  <thead>
                  </thead>

                  <tbody>
                    @foreach ($strukturorganisasi as $item)
                    <tr>
                      <td><img src="{{Storage::url('struktur_organisasi/'.$item->gambar)}}" width="1000px" height="600px" alt=""></td>
                    </tr>
                  @endforeach
                  </tbody>
              </table>
              <br>

            </div>
          </div>
        </div>
      </div>
      
	<!-- </div> -->



@endsection

@stop
