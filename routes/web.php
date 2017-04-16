<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/administrator','HomeController@index');



Route::group(['middleware' => ['web']], function(){
	// Master
	Route::resource('admin/sarana', 'SaranaController');
	Route::resource('admin/sertifikasi', 'SertifikasiController');
	Route::resource('admin/beasiswa', 'BeasiswaController');
	Route::resource('admin/kerjasama', 'KerjasamaController');
	Route::resource('admin/berita', 'BeritaController');
	Route::resource('admin/testimoni', 'TestimoniController');
	Route::resource('admin/kemahasiswaan', 'KemahasiswaanController');
	Route::resource('admin/subkemahasiswaan', 'SubkemahasiswaanController');
	
});

Route::group(['middleware' => ['web']], function(){
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

});
