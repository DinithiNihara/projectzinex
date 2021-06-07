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
    public function create()
    {
        return view('crequest.create');
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
            'message'     =>  $request->get('message')
        ]);
        $crequest->save();
        return redirect()->route('crequest.create')->with('success', 'Data Added');
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
        $crequest = CustomerRequest::find($id);
        return view('crequest.edit', compact('crequest', 'id'));
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
            'email'     =>  'required'
        ]);
        $crequest = CustomerRequest::find($id);
        $crequest->title = $request->get('title');
        $crequest->name = $request->get('name');
        $crequest->email = $request->get('email');
        $crequest->contact = $request->get('contact');
        $crequest->p_location = $request->get('p_location');
        $crequest->r_location = $request->get('r_location');
        $crequest->service = $request->get('service');
        $crequest->vehicle = $request->get('vehicle');
        $crequest->passengers = $request->get('passengers');
        $crequest->p_date = $request->get('p_date');
        $crequest->p_time = $request->get('p_time');
        $crequest->r_date = $request->get('r_date');
        $crequest->r_time = $request->get('r_time');
        $crequest->message = $request->get('message');
        $crequest->save();
        return redirect()->route('crequest.index')->with('success', 'Data Updated');
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
}
