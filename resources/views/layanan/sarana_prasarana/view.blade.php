@extends('layout/master')

@section('title','Sarana Dan Prasarana')

@section('main')

  <div role="main" class="main">

    <section class="page-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li><a href="index.php">Beranda</a></li>
              <li><a href="list_sarana_prasarana.php">Sarana dan Prasarana</a></li>
              <li class="active">{{$sarana->nama}}</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1>{{$sarana->nama}}</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="container">

      <div class="row">
        <div class="col-md-9">
          <div class="blog-posts single-post">

            <article class="post post-large blog-single-post">

              <div class="post-content">

                <div class="row">
                  <div class="col-md-9">
                    <center>
                    <span class="img-thumbnail">

                      <img alt="" src="{{Storage::url('sarana/'.$sarana->cover)}}" width="100%" >
                    </span>
                  </center>
                  </div>
                </div>

                <hr class="tall">

                <p>{!!$sarana->deskripsi!!}</p>

                <div class="post-block post-share">
                  <h3 class="heading-primary"><i class="fa fa-share"></i>Share</h3>

                  <!-- AddThis Button BEGIN -->
                  <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_pinterest_pinit"></a>
                    <a class="addthis_counter addthis_pill_style"></a>
                  </div>
                  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                  <!-- AddThis Button END -->

                </div>

              </div>
            </article>

          </div>
        </div>

        @include('widget_beritaterkini')

      </div>

    </div>

  </div>
@endsection
