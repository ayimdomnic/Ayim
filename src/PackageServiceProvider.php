<?php

namespace Ayim\Package;

class PackageServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->$app->bind('package', function($app){
			return new Package;
		});
	}
	public function boot()
	{
		//loading the route file
		require __DIR__ . '/Http/routes.php';
	}
}