<?php

namespace App\Http\Controllers\Frontend;

use App\IndexData;
use App\Service;
use App\Offer;
use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    protected $index_data;
    protected $services;
    protected $offers;

    public function __construct(IndexData $index_data, Service $services, Offer $offers)
    {        
        $this->index_data = $index_data;
        $this->services = $services;
        $this->offers = $offers;
    }
    
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $index_data = $this->index_data->first();
        $services = $this->services->get();
        $offers = $this->offers->get();

        return view('frontend.index', compact('index_data', 'services', 'offers'));
    }
}
