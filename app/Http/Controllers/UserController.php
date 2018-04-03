<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logger;

class UserController extends Controller
{
    public function getUsers()
    {
        return view('users.users');
    }
    public function createLogger(Request $request)
    {
        if ($request->ajax()) {
            return response(Logger::create($request->all()));
        }
    }
    public function showLoggerInformation()
    {
        $users = $this->LoggerInformation();
        return view('users.userInfo', compact('users'));

    }

    public function LoggerInformation()
    {
        return Logger::all();
    }
    public function editLogger(Request $request)
    {
        if ($request->ajax()) {
            return response(Logger::find($request->id));
        }
    }
    //=============================================
    public function updateLogger(Request $request)
    {
        if ($request->ajax()) {
            return response(Logger::updateOrCreate(['id' => $request->id], $request->all()));
        }
    }
    public function deleteLogger(Request $request)
    {
        if ($request->ajax()) {
            Logger::destroy($request->id);
        }
    }
}
