<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductDetailController extends Controller
{
    public function get(){
        return view('user.product-detail',['active'=>'product-detail']);
    }
}
