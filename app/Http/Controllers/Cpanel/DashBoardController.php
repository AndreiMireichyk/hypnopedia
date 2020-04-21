<?php

namespace App\Http\Controllers\Cpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
        return view('cpanel.dashboard.index');
    }
}
