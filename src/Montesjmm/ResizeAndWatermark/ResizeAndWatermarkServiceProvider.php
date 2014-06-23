<?php namespace Montesjmm\ResizeAndWatermark;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ResizeAndWatermarkServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('montesjmm/resize-and-watermark');

        AliasLoader::getInstance()->alias(
			'ResizeWatermark',
			'Montesjmm\ResizeAndWatermark\ResizeAndWatermark');
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
