<?php 
Route::get('/', function () {
    return view('website.home');
});
Route::get('/quienes-somos', function () {
    return view('website.quienes-somos');
});
Route::get('/blog', function() {
	return view('website.blog');
});
Route::get('/sobre-cop13', function() {
	return view('website.sobre-cop13');
});
Route::get('/sitios-de-interes', function(){
	return view('website.sitios-de-interes');
});
Route::get('/contacto', function(){
	return view('website.contacto');
});