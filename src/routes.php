<?php
Route::get('video', function()
{
	
	return View::make('blog::video');
});
Route::get('blog', function()
{

	return View::make('blog::index');
});

Route::get('home', function()
{
	return View::make('blog::home');
});

Route::get('help', function()
{
	return View::make('blog::help');
});

Route::get('/', function()
{
	return View::make('blog::hello');
});