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
    protected $index_data;
    protected $services;
    protected $offers;


    public function __construct(IndexData $index_data, Service $services, Offer $offers)
    {        
        $this->index_data = $index_data;
        $this->services = $services;
        $this->offers = $offers;
    }
    
    public function index()
    {
        $index_data = $this->index_data->paginate();
        $services = $this->services->get();
        $offers = $this->offers->get();

        return view('frontend.user.dashboard', compact('index_data', 'services', 'offers'));
    }

    public function serviceUpdate(Request $request, $id) {
        // $article = $this->articles->findOrFail($id);
        
        // $filename = $this->getFileName($request->image);
    	// $request->image->move(base_path('public'), $filename);
        
        // $article->fill($request->only('title', 'body', 'img'))->save();
        // return redirect(route('article.edit', $article->id))->with('status', 'Статья успешно изменена');
        $service = $this->services->findOrFail($id);
        dd($service);
    }
}
