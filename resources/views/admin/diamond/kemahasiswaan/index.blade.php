<!-- Index Organisasi -->

@extends('admin.main')

@section('pageInfo')

<title>BeasiswA</title>

@section('rute')
  <li><a href="/administrator"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
  <li class="active">Kemahasiswaan</li>
@endsection

@section('pageTitle')

Kemahasiswaan

@endsection

@section('content')

  <div class="row">
    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="{{url('/admin/kemahasiswaan/create')}}" class="btn btn-primary">Add Hima</a>
        </div>
        <div class="panel-body">
          <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Logo</th>
                <th>Action</th>
              </tr>
              </thead>

              <tbody>
                @php
                $i=1;
                @endphp
                @foreach ($kemahasiswaan as $item)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$item->nama}}</td>
                  <td width="10%">{!! str_limit($item->deskripsi, 70)!!}</td>
                  <td><img src="{{Storage::url('kemahasiswaan/'.$item->logo)}}" width="70px" height="70px" alt=""></td>
                  <td align="center" width="10%">
                    <a href="/admin/kemahasiswaan/{{$item->id}}/edit" class="btn btn-warning btn-simple btn-xs"><li class="fa fa-pencil"></li></a>
                    <a href="/admin/kemahasiswaan/{{$item->id}}/delete" data-name="{{$item->nama}}" class="btn btn-danger btn-simple btn-xs delete"><li class="fa fa-trash"></li></a>
                  </td>

                </tr>
              @endforeach
              </tbody>
          </table>
          <br>

        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a href="{{url('/admin/subkemahasiswaan/create')}}" class="btn btn-primary">Add Subhima</a>
        </div>
        <div class="panel-body">
          <table data-toggle="table"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
              <thead>
              <tr>
                <th>No</th>
                <th>Perusahaan</th>
                <th>Deskripsi</th>
                <th>Logo</th>
                <th>Action</th>
              </tr>
              </thead>

              <tbody>
                @php
                $i=1;
                @endphp
                @foreach ($subkemahasiswaan as $item)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$item->nama}}</td>
                  <td width="10%">{!! str_limit($item->deskripsi, 70)!!}</td>
                  <td><img src="{{Storage::url('kemahasiswaan/'.$item->logo)}}" width="70px" height="70px" alt=""></td>
                  <td align="center" width="10%">
                    <a href="/admin/subkemahasiswaan/{{$item->id}}/edit" class="btn btn-warning btn-simple btn-xs"><li class="fa fa-pencil"></li></a>
                    <a href="/admin/subkemahasiswaan/{{$item->id}}/delete" data-name="{{$item->nama}}" class="btn btn-danger btn-simple btn-xs delete"><li class="fa fa-trash"></li></a>
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


@endsection

@stop
