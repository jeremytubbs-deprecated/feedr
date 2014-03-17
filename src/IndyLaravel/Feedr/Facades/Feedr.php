<?php namespace IndyLaravel\Feedr\Facades;

use Illuminate\Support\Facades\Facade;

class Feedr extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'feedr'; }

}