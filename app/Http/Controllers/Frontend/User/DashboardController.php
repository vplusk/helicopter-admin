<?php

namespace App\Http\Controllers\Frontend\User;

use App\IndexData;
use App\Service;
use App\Offer;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{  
       
    public function index()
    {        
        return view('frontend.user.dashboard');
    }

}
