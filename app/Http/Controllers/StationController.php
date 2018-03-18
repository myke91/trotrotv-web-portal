<?php

namespace App\Http\Controllers;

use App\Station;
use Illuminate\Http\Request;
use \Log;

class StationController extends Controller
{
    public function getStations()
    {
        return view('stations.stations');
    }

    public function downloadStations()
    {
        Log::debug("Received request to download stations");
        // try{
        $stations = $this->StationInformation();
        Log::debug("Stations download request processed");
        return response()->json($stations);
        // }catch(\Exception $ex){
        //     Log::debug("Error occured while sending stations")
        // }

    }

    public function createStation(Request $request)
    {
        if ($request->ajax()) {
            return response(Station::create($request->all()));
        }
    }
    public function showStationInformation()
    {
        $stations = $this->StationInformation();
        return view('stations.stationInfo', compact('stations'));

    }

    public function StationInformation()
    {
        return Station::all();
    }
    public function editStations(Request $request)
    {
        if ($request->ajax()) {
            return response(Station::find($request->station_id));
        }
    }
    //=============================================
    public function updateStations(Request $request)
    {
        if ($request->ajax()) {
            return response(Station::updateOrCreate(['station_id' => $request->station_id], $request->all()));
        }
    }
    public function deleteStation(Request $request)
    {
        if ($request->ajax()) {
            Station::destroy($request->station_id);
        }
    }
}
