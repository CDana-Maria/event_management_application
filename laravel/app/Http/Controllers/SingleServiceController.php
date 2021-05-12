<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class SingleServiceController extends Controller
{
    public function index($id){
        $service= Service::find($id);
        return view('pages.single_service', ['service'=>$service]);
    }
}
