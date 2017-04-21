<?php
//MAIN WEBSITE

Route::group(['middleware' => ['web']], function(){

	Route::get('/', function () {
	    return view('index');
	});

	Route::get('/btk','BtkController@main');

	Route::get('/tentang/visimisi','VisimisiController@main');
	Route::get('/tentang/sejarah','SejarahController@main');
	Route::get('/tentang/struktur_organisasi','StrukturorganisasiController@main');

	Route::get('/prodi/if','IfController@main');
	Route::get('/prodi/si','SiController@main');

	Route::get('/layanan/beasiswa', function () {
	    return view('layanan/beasiswa/index');
	});
	Route::get('/layanan/kurikulum','KurikulumController@main');
	Route::get('/layanan/sarana_prasarana','SaranaController@main');
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
	Route::get('/kerjasama','KerjasamaController@main');
	Route::get('/testimonial','TestimoniController@main');

});

//ADMINISTRATOR

Route::group(['middleware' => ['auth']], function(){

	Route::get('/administrator','AdminController@index');


	// Master
	Route::resource('admin/sarana', 'SaranaController');
	Route::resource('admin/sertifikasi', 'SertifikasiController');
	Route::resource('admin/beasiswa', 'BeasiswaController');
	Route::resource('admin/kerjasama', 'KerjasamaController');
	Route::resource('admin/berita', 'BeritaController');
	Route::resource('admin/testimoni', 'TestimoniController');
	Route::resource('admin/kemahasiswaan', 'KemahasiswaanController');
	Route::resource('admin/subkemahasiswaan', 'SubkemahasiswaanController');

	// Master
	Route::resource('admin/btk', 'BtkController');
	Route::resource('admin/kontak', 'KontakController');
	Route::resource('admin/si', 'SiController');
	Route::resource('admin/if', 'IfController');
	Route::resource('admin/kurikulum', 'KurikulumController');
	Route::resource('admin/sejarah', 'SejarahController');
	Route::resource('admin/sisfo', 'SisfoController');
	Route::resource('admin/visimisi', 'VisimisiController');
	Route::resource('admin/strukturorganisasi', 'StrukturorganisasiController');
	Route::resource('admin/berita', 'BeritaController');

});

Auth::routes();

// Route::get('/home', 'HomeController@index');
