<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Seller;

class SellerController extends Controller
{
    public function createSeller()
    {
    	if($request->ajax()){
    		$sellers = new Seller;
    		$sellers->owner_name = $request->owner_name;
    		$sellers->company_name = $request->company_name;
    		$sellers->registration_number = $request->registration_number;
    		$sellers->ic_number = $request->ic_number;
    		$sellers->farm_address =$request->farm_address;
    		$sellers->handphone_number = $request->handphone_number;
    		$sellers->email_address = $request->email_address;
    		$sellers->password = bcrypt('$request->password');
    		$sellers->save();
    		return response($sellers);
    	}
    }

    public function getSeller()
    {
    	$sellers = Seller::all();
    	return view('seller.seller', compact('sellers'));
    }

    public function editSeller($seller_id, Request $request)
    {
    	$sellers = Seller::where('seller_id', $request->$seller_id)->first();
    	return view('seller.editSeller', compact('sellers'));
    }

    public function updateSeller(Request $request)
    {
    	if($request->ajax()){
    		$sellers = Seller::where('seller_id', $request->seller_id)->first();
    		$sellers->owner_name = $request->owner_name;
    		$sellers->company_name = $request->company_name;
    		$sellers->registration_number = $request->registration_number;
    		$sellers->ic_number = $request->ic_number;
    		$sellers->farm_address =$request->farm_address;
    		$sellers->handphone_number = $request->handphone_number;
    		$sellers->email_address = $request->email_address;
    		$sellers->password = bcrypt('$request->password');
    		$sellers->save();
    		return response($sellers); 
    	}
    }

    public function deleteSeller($seller_id, Request $request)
    {
    	$sellers = Seller::find($seller_id);
    	$sellers->delete();
    	Session::flash('message','Successfully deleted');
    	return Redirect::to('seller');
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
