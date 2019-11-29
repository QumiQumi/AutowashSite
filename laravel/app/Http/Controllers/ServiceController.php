<?php

namespace App\Http\Controllers;

use App\Service;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pricelist = Service::all()->sortBy('id');
        return view('pages.pricelist.pricelist', ['pricelist' => $pricelist]);
    }


    public function show(Service $service)
    {
        //
        //dd($service);
        return view('pages.pricelist.show', ['service'=>$service]);

    }
}
