<?php

namespace App\Http\Controllers;

use App\IndexData;
use Illuminate\Http\Request;

class IndexDataController extends Controller
{
  protected $index_data;
  
  public function __construct(IndexData $index_data)
  {      
      $this->index_data = $index_data;        
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $index_data = $this->index_data->first();
      
    return view('frontend.user.index_data.form')->with('index_data', $index_data);
      
  }

  public function update(Request $request)
  {
    $index_data = $this->index_data->findOrFail(1);     
    
    $index_data->fill($request->only('keywords', 'description', 'ga_script', 'logo', 'site_name', 'title', 'subtitle'))->save();
    return redirect(route('index_data.index', $index_data));
  }
}