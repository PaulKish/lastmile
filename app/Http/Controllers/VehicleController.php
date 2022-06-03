<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if($user->username == 'admin') {
            // if admin show all vehicles
            $vehicles = Vehicle::all();
            $admin = true;
        } else {
            $id = Auth::id();
            $vehicles = Vehicle::where('created_by', $id)->get();
            $admin = false;
        }
    
        return view('dashboard',compact('vehicles','admin'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle' => 'required',
            'model' => 'required',
            'year' => 'required',
        ]);

        // add creator
    
        Vehicle::create($request->all() + ['created_by' => Auth::id()]);
     
        return redirect()->route('dashboard')->with('success','Vehicle created!');
    }
}
