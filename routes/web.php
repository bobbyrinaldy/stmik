<?php
//MAIN WEBSITE

Route::group(['middleware' => ['web']], function(){

	Route::get('/','IndexController@index');

	Route::get('/btk','BtkController@main');
	Route::get('/btk/{id}','BtkController@detail');

	Route::get('/tentang/visimisi','VisimisiController@main');
	Route::get('/tentang/sejarah','SejarahController@main');
	Route::get('/tentang/struktur_organisasi','StrukturorganisasiController@main');

	Route::get('/prodi/if','IfController@main');
	Route::get('/prodi/si','SiController@main');

	Route::get('/layanan/beasiswa', 'BeasiswaController@main');
	Route::get('/layanan/beasiswa/{id}', 'BeasiswaController@detail');


	Route::get('/layanan/kurikulum','KurikulumController@main');
	Route::get('/layanan/sarana_prasarana','SaranaController@main');
	Route::get('/layanan/sarana_prasarana/{id}','SaranaController@detail');
	Route::get('/layanan/sisfo_akademik','SisfoController@main');
	Route::get('/layanan/sertifikasi_internasional','SertifikasiController@main');

	Route::get('/berita','BeritaController@main');
	Route::get('/berita/{id}','BeritaController@detail');

	Route::get('/kemahasiswaan/himastmik','KemahasiswaanController@himastmik');
	Route::get('/kemahasiswaan/himakom','KemahasiswaanController@himakom');
	Route::get('/kemahasiswaan/loopcommunity','SubkemahasiswaanController@loopcommunity');
	Route::get('/kemahasiswaan/crash','SubkemahasiswaanController@crash');
	Route::get('/kemahasiswaan/comic','SubkemahasiswaanController@comic');
	Route::get('/kemahasiswaan/move','SubkemahasiswaanController@move');


	Route::get('/hubungi_kami', function () {
	    return view('hubungi');
	});
	Route::get('/developer', function () {
	    return view('developer');
	});
	Route::get('/kerjasama/luar_negeri','KerjasamaController@luar');
	Route::get('/kerjasama/dalam_negeri','KerjasamaController@dalam');
	Route::get('/testimonial','TestimoniController@main');

	Route::get('/gallery','GalleryController@main');

});

//ADMINISTRATOR

Route::group(['middleware' => ['auth']], function(){

	Route::get('/administrator','AdminController@index');

	//Super Admin
	Route::get('/superadmin/modifauth','ModifiedAuthentikasiController@index');
	Route::get('/superadmin/modifauth/{id}/edit','ModifiedAuthentikasiController@edit');
	Route::post('/superadmin/modifauth/{id}/update','ModifiedAuthentikasiController@update');
	Route::post('/superadmin/modifauth/{id}/delete','ModifiedAuthentikasiController@destroy');
	// Master
	Route::resource('admin/beranda', 'BerandaController');
	Route::resource('admin/sarana', 'SaranaController');
	Route::get('admin/sarana/{id}/delete', 'SaranaController@destroy');
	Route::resource('admin/sertifikasi', 'SertifikasiController');
	Route::get('admin/sertifikasi/{id}/delete', 'SertifikasiController@destroy');
	Route::resource('admin/beasiswa', 'BeasiswaController');
	Route::get('admin/beasiswa/{id}/delete', 'BeasiswaController@destroy');
	Route::resource('admin/kerjasama', 'KerjasamaController');
	Route::get('admin/kerjasama/{id}/delete', 'KerjasamaController@destroy');
	// Route::get('admin/kerjasama/search', 'SearchAdminController@kerjasama');
	Route::resource('admin/berita', 'BeritaController');
	Route::resource('admin/testimoni', 'TestimoniController');
	Route::resource('admin/kemahasiswaan', 'KemahasiswaanController');
	Route::get('admin/kemahasiswaan/{id}/delete', 'KemahasiswaanController@destroy');
	Route::resource('admin/subkemahasiswaan', 'SubkemahasiswaanController');
	Route::get('admin/subkemahasiswaan/{id}/delete', 'SubkemahasiswaanController@destroy');
	Route::resource('admin/carousel', 'CarouselController');
	Route::get('admin/carousel/{id}/delete', 'CarouselController@destroy');

	// Master
	Route::resource('admin/btk', 'BtkController');
	Route::get('admin/btk/{id}/delete', 'BtkController@destroy');
	Route::resource('admin/gallery', 'GalleryController');
	Route::resource('admin/kontak', 'KontakController');
	Route::resource('admin/si', 'SiController');
	Route::resource('admin/if', 'IfController');
	Route::resource('admin/kurikulum', 'KurikulumController');
	Route::resource('admin/sejarah', 'SejarahController');
	Route::resource('admin/sisfo', 'SisfoController');
	Route::resource('admin/visimisi', 'VisimisiController');
	Route::resource('admin/strukturorganisasi', 'StrukturorganisasiController');
	Route::resource('admin/berita', 'BeritaController');
	Route::get('admin/berita/{id}/delete', 'BeritaController@destroy');

});

Auth::routes();

// Route::get('/home', 'HomeController@index');
