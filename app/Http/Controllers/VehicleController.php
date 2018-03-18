<?php

namespace App\Http\Controllers;
use App\Vehicle;

class VehicleController extends Controller
{
    public function getVehicles()
    {
        return view('vehicles.vehicles');
    }

    public function downloadVehicles()
    {
        $vehicles = $this->VehicleInformation();
        return response()->json($vehicles);
    }

    public function VehicleInformation()
    {
        return Vehicle::all();
    }
}
