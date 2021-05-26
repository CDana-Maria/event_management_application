<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AllServicesController extends Controller
{
    public function index()
    {    
        $all=Service::whereNotNull('description')
        ->orderBy('description', 'asc')->get();
      
         return view('pages.all_products', ['all'=>$all]);
    }
}
