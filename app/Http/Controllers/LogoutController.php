<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function getlogout(){
        Session::flush();
        return redirect('home');
    }
}