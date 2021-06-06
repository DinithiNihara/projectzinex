<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('request.create');
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
        $request = new Request([
            'title'    =>  $request->get('title'),
            'name'    =>  $request->get('name'),
            'email'     =>  $request->get('email'),
            'contact'    =>  $request->get('title'),
            'p_location'    =>  $request->get('name'),
            'r_location'     =>  $request->get('email'),
            'service'    =>  $request->get('title'),
            'vehicle'    =>  $request->get('name'),
            'passengers'     =>  $request->get('email'),
            'p_date'    =>  $request->get('title'),
            'p_time'    =>  $request->get('name'),
            'r_date'     =>  $request->get('email'),
            'r_time'    =>  $request->get('name'),
            'message'     =>  $request->get('email')
        ]);
        $request->save();
        return redirect()->route('request.create')->with('success', 'Data Added');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
