<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    // Dashboard - Analytics
    public function dashboard(){

//        $pageConfigs = [
//            'pageHeader' => false
//        ];

        return view('back-end.dashboard');
    }

}

