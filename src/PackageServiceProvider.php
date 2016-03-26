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

		//difine view path
		$this->loadViewsFrom(__DIR__ . '/../views/', 'packages');
		$this->publishes([
			__DIR__ . '/migrations/2016_26_3_0000000_create_packages_table.php' => base_path('database/migrations/2016_26_3_0000000_create_packages_table.php');
			]);

	}
}