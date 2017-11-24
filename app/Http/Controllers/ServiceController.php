<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
  protected $services;
  
  public function __construct(Service $services)
  {      
      $this->services = $services;        
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $services = $this->services->get();      
      
      return view('frontend.user.services.index')->with('services', $services);
      
  }

  public function create(Service $service)
  {         
      return view('frontend.user.services.form', compact('service'));
  }

  public function store(Request $request)
  {         
      
      $this->services->create($request->only('icon', 'text'));
      

      return redirect(route('service.index'));
  }

  public function edit($id) {
    $service = $this->services->findOrFail($id);
    
    return view('frontend.user.services.form', compact('service'));
  }

  public function update(Request $request, $id)
  {
      $service = $this->services->findOrFail($id);     
            
      $service->fill($request->only('icon', 'text'))->save();
      return redirect(route('service.edit', $service->id))->with('status', 'Service has been updated');
  }
 
  public function confirm($id) {
    $service = $this->services->findOrFail($id);
    
    return view('frontend.user.services.confirm', compact('service'));
  }

  public function destroy($id)
  {
      $service = $this->services->findOrFail($id);

      $service->delete();

      return redirect(route('service.index'));
  }
}
