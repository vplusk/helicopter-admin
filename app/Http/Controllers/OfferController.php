<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
  protected $offers;
  
  public function __construct(Offer $offers)
  {      
      $this->offers = $offers;        
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $offers = $this->offers->get();      
      
      return view('frontend.user.offers.index')->with('offers', $offers);
      
  }

  public function create(Offer $offer)
  {         
      return view('frontend.user.offers.form', compact('offer'));
  }

  public function store(Request $request)
  {         
      
      $this->offers->create($request->only('icon', 'title', 'text'));
      

      return redirect(route('offer.index'));
  }

  public function edit($id) {
    $offer = $this->offers->findOrFail($id);
    
    return view('frontend.user.offers.form', compact('offer'));
  }

  public function update(Request $request, $id)
  {
      $offer = $this->offers->findOrFail($id);     
            
      $offer->fill($request->only('icon', 'title', 'text'))->save();
      return redirect(route('offer.index', $offer->id));
  }
 
  public function confirm($id) {
    $offer = $this->offers->findOrFail($id);
    
    return view('frontend.user.offers.confirm', compact('offer'));
  }

  public function destroy($id)
  {
      $offer = $this->offers->findOrFail($id);

      $offer->delete();

      return redirect(route('offer.index'));
  }
}
