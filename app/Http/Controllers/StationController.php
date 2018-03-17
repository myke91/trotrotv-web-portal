<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;

class StationController extends Controller
{
    public function getStations()
    {
        return view('stations.stations');
    }
    public function createStation(Request $request)
    {
        if($request->ajax())
        {
            return response(Station::create($request->all()));
        }
    }
    public function showStationInformation()
    {
        $stations = $this->StationInformation();
        return view('stations.stationInfo',compact('stations'));

    }

    public function StationInformation()
    {
        return Station::all();
    }
    public function editStations(Request $request)
    {
        if($request->ajax())
        {
            return response(Station::find($request->station_id));
        }
    }
    //=============================================
    public function updateStations(Request $request)
    {
        if($request->ajax())
        {
            return response(Station::updateOrCreate(['station_id'=>$request->station_id],$request->all()));
        }
    }
    public function deleteStation(Request $request)
    {
        if($request->ajax())
        {
            MyClass::destroy($request->station_id);
        }
    }
}
