<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function showCheckOutForm(){
        return view("checkoutPage");
    }
    public function showTransaction(){
        return view("transaction");
    }
    public function showCart(){
        return view("cartPage");
    }
    public function showStore(){
        return view("storePage");
    }
}
