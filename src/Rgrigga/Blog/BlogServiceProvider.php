<?php namespace Rgrigga\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 * 
		// http://laravel.com/docs/packages#package-configuration
		
		// Passing custom namespace to package method
		// $this->package('vendor/package', 'custom-namespace');

		// // Package resources now accessed via custom-namespace
		// $view = View::make('custom-namespace::foo');
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('rgrigga/blog','blog');
		require_once __DIR__.'/../../routes.php';

				//DOES NOT WORK:
		// \Route::any('dashboard',function(){
		// 	echo "<h1>HELLO</h1>";
		// 	return \View::make('agrivault::dashboard2');
		// });
			
		//WORKS, but shouldn't do it:
		// echo \View::make('agrivault::hello');

		\Session::flash('message','AgrivaultServiceProvider');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}