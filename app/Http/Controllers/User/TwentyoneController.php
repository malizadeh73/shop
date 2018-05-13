<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TwentyoneController extends Controller
{
    public function get(){
        return view('user.twentyone',['active'=>'twentyone']);
    }
}
