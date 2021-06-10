<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Models\DriverAssign;
use App\Models\CustomerRequest;
use App\Models\Driver;

class DriverAssignController extends Controller
{
    public function index()
    {

        $url = URL::full();
        $shorten = substr($url, 36);
        $vid = substr($shorten, 0, strlen($shorten) - 1);

        $crequest = CustomerRequest::find($vid);
        $res=json_decode(json_encode($crequest)); 

        $drivers = Driver::all()->toArray();
 
        return view('driver_assignment.index',compact('res','drivers')); 
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    =>  'required',
            'did'    =>  'required'
        ]);
        $driverassign = new DriverAssign([
            'did'    =>  $request->get('id'),
            'name'    =>  $request->get('name'),
            'rid'    =>  $request->get('rid')
        ]);
        $driverassign->save();
        return redirect()->route('driver_assignment.index')->with('success', 'Data Added');
    }


}
