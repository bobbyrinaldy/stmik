<!-- SI INDEX -->

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

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              @if(!empty($add))
                <a href="{{url('/admin/si/create')}}" class="btn btn-primary">Create New</a>
              @else
                @foreach ($si as $item)
                  <a href="{{url('/admin/si/'. $item->id .'/edit')}}" class="btn btn-warning">Edit</a>
                @endforeach

              @endif
            </div>
            <div class="panel-body">
              <table>

                  <tbody>
                    @foreach ($si as $item)
                    <tr>
                      <td>{!!$item->deskripsi!!}</td>
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
