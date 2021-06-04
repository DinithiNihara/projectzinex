<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all()->toArray();
        return view('driver.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver.create');
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
            'name'    =>  'required',
            'email'     =>  'required',
            'address'    =>  'required',
            'nic'     =>  'required',
            'cno'    =>  'required',
            'status'     =>  'required'
        ]);
        $driver = new Driver([
            'name'    =>  $request->get('name'),
            'email'     =>  $request->get('email'),
            'address'    =>  $request->get('address'),
            'nic'     =>  $request->get('nic'),
            'cno'    =>  $request->get('cno'),
            'status'     =>  $request->get('status')
        ]);
        $driver->save();
        return redirect()->route('driver.create')->with('success', 'Data Added');
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
        $driver = Driver::find($id);
        return view('driver.edit', compact('driver', 'id'));
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
            'name'    =>  'required',
            'email'     =>  'required',
            'address'    =>  'required',
            'nic'     =>  'required',
            'cno'    =>  'required',
            'status'     =>  'required'
        ]);
        $driver = Driver::find($id);
        $driver->name = $request->get('name');
        $driver->email = $request->get('email');
        $driver->address = $request->get('address');
        $driver->nic = $request->get('nic');
        $driver->cno = $request->get('cno');
        $driver->status = $request->get('status');
        $driver->save();
        return redirect()->route('driver.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $driver = Driver::find($id);
        $driver->delete();
        return redirect()->route('driver.index')->with('success', 'Data Deleted');
    }
}
