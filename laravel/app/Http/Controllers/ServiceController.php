<?php

namespace App\Http\Controllers;

use App\Service;
use App\Car;
use App\ServiceForCar;
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
        return view('pages.pricelist.show', ['service' => $service]);
    }
    public function store(Request $request)
    {
        // dd($request);
        $service = new Service();
        $service->name = $request->name;
        $service->save();
        foreach (Car::all() as $car) {
            $serviceForCar = new ServiceForCar();
            $serviceForCar->service_id = $service->id;
            $serviceForCar->car_id = $car->id;
            $serviceForCar->price = $request->price[$car->id];
            $serviceForCar->save();
        }
        return redirect(route('pricelist'));
    }
    public function edit(Service $service)
    {
        //
        return view('pages.news.edit', ['article' => $service]);
    }

    public function update(Request $request, Service $service)
    {
        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();
         return redirect(route('pricelist'));
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect(route('pricelist'));
    }
}
