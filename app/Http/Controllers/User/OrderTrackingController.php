<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderTrackingController extends Controller
{
    public function get(){
        return view('user.order-tracking',['active'=>'order-tracking']);
    }
}
