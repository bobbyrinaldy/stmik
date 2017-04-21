@extends('layout/master')

@section('main')
  <div role="main" class="main">

  				<section class="page-header">
  					<div class="container">
  						<div class="row">
  							<div class="col-md-12">
  								<ul class="breadcrumb">
  									<li><a href="#">Home</a></li>
  									<li class="active">Blog</li>
  								</ul>
  							</div>
  						</div>
  						<div class="row">
  							<div class="col-md-12">
  								<h1>Blog Post</h1>
  							</div>
  						</div>
  					</div>
  				</section>

  				<div class="container">

  					<div class="row">
  						<div class="col-md-9">
  							<div class="blog-posts single-post">

  								<article class="post post-large blog-single-post">

  									<div class="post-date">
  										<span class="day">10</span>
  										<span class="month">Jan</span>
  									</div>

  									<div class="post-content">

  										<h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>

  										<div class="post-meta">
  											<span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
  											<span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
  											<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
  										</div>

  										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
  										<p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
  										<p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>
  										<p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Curabitur nulla dui, fermentum sed dapibus at, adipiscing eget nisi. Aenean iaculis vehicula imperdiet. Donec suscipit leo sed metus vestibulum pulvinar. Phasellus bibendum magna nec tellus fringilla faucibus. Phasellus mollis scelerisque volutpat. Ut sed molestie turpis. Phasellus ultrices suscipit tellus, ac vehicula ligula condimentum et.</p>
  										<p>Aenean metus nibh, molestie at consectetur nec, molestie sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec euismod urna. Donec gravida pharetra ipsum, non volutpat ipsum sagittis a. Phasellus ut convallis ipsum. Sed nec dui orci, nec hendrerit massa. Curabitur at risus suscipit massa varius accumsan. Proin eu nisi id velit ultrices viverra nec condimentum magna. Ut porta orci quis nulla aliquam at dictum mi viverra. Maecenas ultricies elit in tortor scelerisque facilisis. Mauris vehicula porttitor lacus, vel pretium est semper non. Ut accumsan rhoncus metus non pharetra. Quisque luctus blandit nisi, id tempus tellus pulvinar eu. Nam ornare laoreet mi a molestie. Donec sodales scelerisque congue. </p>


  										<div class="post-block post-share">
  											<h3 class="heading-primary"><i class="fa fa-share"></i>Share this post</h3>

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

  						<div class="col-md-3">
  							<aside class="sidebar">

  								<form>
  									<div class="input-group input-group-lg">
  										<input class="form-control" placeholder="Search..." name="s" id="s" type="text">
  										<span class="input-group-btn">
  											<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
  										</span>
  									</div>
  								</form>

  								<hr>

  								<h4 class="heading-primary">Categories</h4>
  								<ul class="nav nav-list mb-xlg">
  									<li><a href="#">Design (2)</a></li>
  									<li class="active">
  										<a href="#">Photos (4)</a>
  										<ul>
  											<li><a href="#">Animals</a></li>
  											<li class="active"><a href="#">Business</a></li>
  											<li><a href="#">Sports</a></li>
  											<li><a href="#">People</a></li>
  										</ul>
  									</li>
  									<li><a href="#">Videos (3)</a></li>
  									<li><a href="#">Lifestyle (2)</a></li>
  									<li><a href="#">Technology (1)</a></li>
  								</ul>

  								<div class="tabs mb-xlg">
  									<ul class="nav nav-tabs">
  										<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
  										<li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
  									</ul>
  									<div class="tab-content">
  										<div class="tab-pane active" id="popularPosts">
  											<ul class="simple-post-list">
  												<li>
  													<div class="post-image">
  														<div class="img-thumbnail">
  															<a href="blog-post.html">
  																<img src="img/blog/blog-thumb-1.jpg" alt="">
  															</a>
  														</div>
  													</div>
  													<div class="post-info">
  														<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
  														<div class="post-meta">
  															 Jan 10, 2015
  														</div>
  													</div>
  												</li>
  												<li>
  													<div class="post-image">
  														<div class="img-thumbnail">
  															<a href="blog-post.html">
  																<img src="img/blog/blog-thumb-2.jpg" alt="">
  															</a>
  														</div>
  													</div>
  													<div class="post-info">
  														<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
  														<div class="post-meta">
  															 Jan 10, 2015
  														</div>
  													</div>
  												</li>
  												<li>
  													<div class="post-image">
  														<div class="img-thumbnail">
  															<a href="blog-post.html">
  																<img src="img/blog/blog-thumb-3.jpg" alt="">
  															</a>
  														</div>
  													</div>
  													<div class="post-info">
  														<a href="blog-post.html">Odiosters Nullam Vitae</a>
  														<div class="post-meta">
  															 Jan 10, 2015
  														</div>
  													</div>
  												</li>
  											</ul>
  										</div>
  										<div class="tab-pane" id="recentPosts">
  											<ul class="simple-post-list">
  												<li>
  													<div class="post-image">
  														<div class="img-thumbnail">
  															<a href="blog-post.html">
  																<img src="img/blog/blog-thumb-2.jpg" alt="">
  															</a>
  														</div>
  													</div>
  													<div class="post-info">
  														<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
  														<div class="post-meta">
  															 Jan 10, 2015
  														</div>
  													</div>
  												</li>
  												<li>
  													<div class="post-image">
  														<div class="img-thumbnail">
  															<a href="blog-post.html">
  																<img src="img/blog/blog-thumb-3.jpg" alt="">
  															</a>
  														</div>
  													</div>
  													<div class="post-info">
  														<a href="blog-post.html">Odiosters Nullam Vitae</a>
  														<div class="post-meta">
  															 Jan 10, 2015
  														</div>
  													</div>
  												</li>
  												<li>
  													<div class="post-image">
  														<div class="img-thumbnail">
  															<a href="blog-post.html">
  																<img src="img/blog/blog-thumb-1.jpg" alt="">
  															</a>
  														</div>
  													</div>
  													<div class="post-info">
  														<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
  														<div class="post-meta">
  															 Jan 10, 2015
  														</div>
  													</div>
  												</li>
  											</ul>
  										</div>
  									</div>
  								</div>

  								<hr>

  								
  							</aside>
  						</div>
  					</div>

  				</div>

  			</div>
@endsection
