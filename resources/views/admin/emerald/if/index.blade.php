<!-- Index If -->

@extends('admin.main')

@section('pageInfo')

<title>Informatika</title>

@section('rute')
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Icons</li>
@endsection

@section('pageTitle')

Informatika

@endsection

@section('content')

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              @if(!empty($add))
                <a href="{{url('/admin/if/create')}}" class="btn btn-primary">Add</a>
              @else
                @foreach ($if as $item)
                  <a href="{{url('/admin/if/'. $item->id .'/edit')}}" class="btn btn-warning">Edit</a>
                @endforeach

              @endif
            </div>
            <div class="panel-body">
              <table>
                  <thead>

                  </thead>

                  <tbody>
                    @foreach ($if as $item)
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
