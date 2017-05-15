<!-- index BTK -->

@extends('admin.main')

@section('pageInfo')

<title>Gallery</title>

@section('rute')
                <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Gallery</li>
@endsection

@section('pageTitle')

Gallery

@endsection

@section('content')

  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="{{url('/admin/gallery/create')}}" class="btn btn-primary">Add</a>
        </div>
        <div class="panel-body">
          <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
              <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Created at</th>
                <th>Update at</th>
                <th>Action</th>
              </tr>
              </thead>

              <tbody>
                @php
                $i=1;
                @endphp
                @foreach ($gallery as $item)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$item->judul}}</td>
                  <td><img src="{{Storage::url('gallery/'.$item->gambar)}}" width="70px" height="70px" alt=""></td>
                  <td>{{$item->created_at}}</td>
                  <td>{{$item->updated_at}}</td>
                  <td align="center" width="10%">
                    <a href="/admin/gallery/{{$item->id}}/edit" class="btn btn-warning btn-simple btn-xs"><li class="fa fa-pencil"></li></a>
                    <a href="/admin/gallery/{{$item->id}}/delete"  class="btn btn-danger btn-simple btn-xs delete"><li class="fa fa-trash"></li></a>
                  </td>

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
