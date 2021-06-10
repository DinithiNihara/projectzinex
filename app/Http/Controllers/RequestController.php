<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRequest;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crequest = CustomerRequest::all()->toArray();
        return view('crequest.index', compact('crequest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $service=$request->service;
        $type=$request->type;
        $pickup_date=$request->pickup_date;
        $pickup_time=$request->pickup_time;
        $return_date=$request->return_date;
        $vid=$request->vid;

        $time = strtotime($pickup_date);
        $p_date = date('Y-m-d',$time);

        $time = strtotime($return_date);
        $r_date = date('Y-m-d',$time);

        $array=[$service,$type,$p_date,$pickup_time,$r_date,$vid];

        return view('crequest.create',compact('array'));
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
            'email'     =>  'required'
        ]);
        $crequest = new CustomerRequest([
            'title'    =>  $request->get('title'),
            'name'    =>  $request->get('name'),
            'email'     =>  $request->get('email'),
            'contact'    =>  $request->get('contact'),
            'p_location'    =>  $request->get('p_location'),
            'r_location'     =>  $request->get('r_location'),
            'service'    =>  $request->get('service'),
            'vehicle'    =>  $request->get('vehicle'),
            'passengers'     =>  $request->get('passengers'),
            'p_date'    =>  $request->get('p_date'),
            'p_time'    =>  $request->get('p_time'),
            'r_date'     =>  $request->get('r_date'),
            'r_time'    =>  $request->get('r_time'),
            'message'     =>  $request->get('message'),
            'vid'     =>  $request->get('vid')
        ]);
        $crequest->save();
        return redirect()->route('crequest.invoice')->with('success', 'Data Added');
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
    public function edit()
    {
     
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crequest = CustomerRequest::find($id);
        $crequest->delete();
        return redirect()->route('crequest.index')->with('success', 'Data Deleted');
    }

    public function invoice()
    {
        return view('crequest.invoice');
    }
}
