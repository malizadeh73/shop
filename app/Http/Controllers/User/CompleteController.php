<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompleteController extends Controller
{
    public function get(){
        return view('user.complete',['active'=>'complete']);
    }
}
