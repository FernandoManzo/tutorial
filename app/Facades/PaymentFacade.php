<?php 

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class PaymentFacade extends Facade {
	public static function getFacadeAccessor() { return 'App\Models\Paypal'; }
}

