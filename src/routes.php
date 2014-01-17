<?php

Route::get('blog', function()
{
	return View::make('blog::home');
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