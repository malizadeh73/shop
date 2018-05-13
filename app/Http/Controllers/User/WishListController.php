<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WishListController extends Controller
{
    public function get(){
        return view('user.wishlist',['active'=>'wishlist']);
    }
}
