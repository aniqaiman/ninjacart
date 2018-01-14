<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;
use Session;
use App\Service;
use App\ServiceCategory;

class ServiceController extends Controller
{
    public function createService(Request $request)
    {
    	if($request->ajax()){
    		$services = new Service;
    		$services->service_cat = $request->service_cat;
    		$services->service_package = $request->service_package;
    		$services->service_date = $request->service_date;
    		$services->service_pax = $request->service_pax;
    	}
    }

    public function getService()
    {
    	$services = Service::all();
    	return view('service.service', compact('services'));
    }

    public function createServiceCategory(Request $request)
    {
    	if ($request->ajax()) {
    		return response(ServiceCategory::create($request->all()));
    	}
    }

    public function getServiceCategory()
    {
    	$servicecategories = ServiceCategory::all();
    	return view('service.servicecategory', compact('servicecategories'));
    }
}