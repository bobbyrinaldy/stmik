<div id="sidebar-collapse" class="col-sm-3 col-lg-3 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="{{url('/administrator')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Dashboard</a></li>

			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Tentang Kami
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="{{url('/admin/visimisi')}}">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Visi Dan Misi
						</a>
					</li>
					<li>
						<a class="" href="{{url('/admin/sejarah')}}">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Sejarah
						</a>
					</li>

					<li>
						<a class="" href="{{url('/admin/strukturorganisasi')}}">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Struktur Organisasi
						</a>
					</li>
				</ul>

			</li>


			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Program Studi
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="{{url('/admin/si')}}">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>Sistem Informasi
						</a>
					</li>
					<li>
						<a class="" href="{{url('/admin/if')}}">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>Informatika
						</a>
					</li>
				</ul>
			</li>

			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Layanan
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="{{url('/admin/sarana')}}">
							<svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Sarana Dan Prasarana
						</a>
					</li>

					<li>
						<a class="" href="{{url('/admin/sertifikasi')}}">
							<svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Sertifikasi Internasional
						</a>
					</li>

					<li>
						<a class="" href="{{url('/admin/btk')}}">
							<svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Bursa Tenaga Kerja (BTK)
						</a>
					</li>

					<li>
						<a class="" href="{{url('/admin/kurikulum')}}">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Kurikulum
						</a>
					</li>
					<li>
						<a class="" href="{{url('/admin/sisfo')}}">
							<svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Sisfo Akademik
						</a>
					</li>

					<li>
						<a class="" href="{{url('/admin/beasiswa')}}">
							<svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Beasiswa
						</a>
					</li>
				</ul>
			</li>

			<li><a href="{{url('/admin/kemahasiswaan')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Kemahasiswaan</a></li>

			<li><a href="{{url('/admin/kerjasama')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Kerjasama</a></li>

			<li><a href="{{url('/admin/kontak')}}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg> Hubungi Kami</a></li>

			<li><a href="{{url('/admin/berita')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Berita</a></li>
			<li><a href="{{url('/admin/gallery')}}"><svg class="glyph stroked camera "><use xlink:href="#stroked-camera"/></svg> Gallery</a></li>

			<li><a href="{{url('/admin/testimoni')}}"><svg class="glyph stroked table"><use xlink:href="#stroked-table"/></svg> Testimoni</a></li>

			<li class="parent">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked chevron right"><use xlink:href="#stroked-chevron-right"/></svg> Sinopsis Utama
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li>
						<a href="{{url('/admin/beranda')}}">
							<svg class="glyph stroked camera "><use xlink:href="#stroked-camera"/></svg> Beranda
						</a>
					</li>

					<li>
						<a href="{{url('/admin/carousel')}}">
							<svg class="glyph stroked camera "><use xlink:href="#stroked-camera"/></svg> Carousel
						</a>
					</li>
				</ul>
			</li>


			<li><a href="{{url('/superadmin/modifauth')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Pengguna</a></li>
		</ul>

	</div><!--/.sidebar-->
