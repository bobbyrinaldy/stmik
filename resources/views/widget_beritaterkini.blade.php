<div class="col-md-3">
  <aside class="sidebar">

    <div class="tabs mb-xlg">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#popularPosts" data-toggle="tab"> Berita Terkini</a></li>
      </ul>
      <div class="tab-content">

        @foreach ($widget_berita_latest as $item)
          <div class="tab-pane active" id="popularPosts">
            <ul class="simple-post-list">
              <li>
                <div class="post-image">
                  <div class="img-thumbnail">
                    <a href="blog-post.html">
                      <img src="{{Storage::url('berita/'.$item->cover)}}" alt="{{$item->judul}}" height="35px" width="35">
                    </a>
                  </div>
                </div>
                <div class="post-info">
                  <a class="a1" href="blog-post.html">{{$item->judul}}</a>
                  <div class="post-meta">
                     Jan 10, 2015
                  </div>
                </div>
              </li>
            </ul>
          </div>
        @endforeach

        @foreach ($widget_berita_random as $item)
          <div class="tab-pane active" id="popularPosts">
            <ul class="simple-post-list">
              <li>
                <div class="post-image">
                  <div class="img-thumbnail">
                    <a href="blog-post.html">
                      <img src="{{Storage::url('berita/'.$item->cover)}}" alt="{{$item->judul}}" height="35px" width="35">
                    </a>
                  </div>
                </div>
                <div class="post-info">
                  <a class="a1" href="blog-post.html">{{$item->judul}}</a>
                  <div class="post-meta">
                     Jan 10, 2015
                  </div>
                </div>
              </li>
            </ul>
          </div>
        @endforeach
  </aside>
  <hr />
