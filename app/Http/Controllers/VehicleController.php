<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all()->toArray();
        return view('vehicle.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'regNo'    =>  'required',
            'manufacturer'     =>  'required',
            'model'    =>  'required',
            'type'    =>  'required',
            'mYear'     =>  'required',
            'cost'    =>  'required',
            'status'     =>  'required'
        ]);
        $vehicle = new Vehicle([
            'regNo'    =>  $request->get('regNo'),
            'manufacturer'     =>  $request->get('manufacturer'),
            'model'    =>  $request->get('model'),
            'type'    =>  $request->get('type'),
            'mYear'     =>  $request->get('mYear'),
            'rYear'    =>  $request->get('rYear'),
            'cost'     =>  $request->get('cost'),
            'status'    =>  $request->get('status'),
            'description'     =>  $request->get('description')
        ]);
        $vehicle->save();
        return redirect()->route('vehicle.create')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicle.edit', compact('vehicle', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'regNo'    =>  'required',
            'manufacturer'     =>  'required',
            'model'    =>  'required',
            'type'    =>  'required',
            'mYear'     =>  'required',
            'cost'    =>  'required',
            'status'     =>  'required'
        ]);
        $vehicle = Vehicle::find($id);
        $vehicle->regNo = $request->get('regNo');
        $vehicle->manufacturer = $request->get('manufacturer');
        $vehicle->model = $request->get('model');
        $vehicle->type = $request->get('type');
        $vehicle->mYear = $request->get('mYear');
        $vehicle->rYear = $request->get('rYear');
        $vehicle->cost = $request->get('cost');
        $vehicle->status = $request->get('status');
        $vehicle->description = $request->get('description');
        $vehicle->save();
        return redirect()->route('vehicle.index')->with('success', 'Data Updated');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->route('vehicle.index')->with('success', 'Data Deleted');
    }
}
