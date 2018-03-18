<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Station;


class VehicleController extends Controller
{
    public function getVehicles()
    {
        $stations = Station::all();
        return view('vehicles.vehicles',compact('stations'));
    }
    public function createVehicle(Request $request)
    {
        if($request->ajax())
        {
            return response(Vehicle::create($request->all()));
        }
    }
    public function showVehicleInformation()
    {
        $vehicles = $this->VehicleInformation();
        return view('vehicles.vehicleInfo',compact('vehicles'));

    }

    public function VehicleInformation()
    {
        return Vehicle::join('station','station.station_id','=','vehicles.station_id')
            ->get();
    }
    public function editVehicle(Request $request)
    {
        if($request->ajax())
        {
            return response(Vehicle::find($request->vehicle_id));
        }
    }
    //=============================================
    public function updateVehicle(Request $request)
    {
        if($request->ajax())
        {
            return response(Vehicle::updateOrCreate(['vehicle_id'=>$request->vehicle_id],$request->all()));
        }
    }
    public function deleteVehicle(Request $request)
    {
        if($request->ajax())
        {
            Vehicle::destroy($request->vehicle_id);
        }
    }

    public function downloadVehicles()
    {
        $vehicles = $this->VehicleInformation();
        return response()->json($vehicles);
    }


}
