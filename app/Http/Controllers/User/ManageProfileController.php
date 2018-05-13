<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageProfileController extends Controller
{
    public function get(){
        return view('user.manage-profile',['active'=>'manage-profile']);
    }
}
