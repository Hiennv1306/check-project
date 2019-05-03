<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class ShowCartHeaderController extends Controller
{
    public function getData() {
    	$cart_data = Cart::content();
    	
    }
}
