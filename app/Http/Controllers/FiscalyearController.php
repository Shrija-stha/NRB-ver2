<?php

namespace App\Http\Controllers;
use App\Models\Fiscalyear;
use Illuminate\Http\Request;

class FiscalyearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fiscalyear = Fiscalyear::all();
   
        return view('fiscalyear.index')->with('fiscalyear', $fiscalyear);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fiscalyear.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Fiscalyear::create($input);
        return redirect('fiscalyear')->with('flash_message', 'Contact Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fiscalyear = Fiscalyear::find($id);
        return view('fiscalyear.show')->with('fiscalyear', $fiscalyear);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fiscalyear = Fiscalyear::find($id);
     
        return view('fiscalyear.edit')->with('fiscalyear', $fiscalyear);
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
        $index = Fiscalyear::find($id);
        $input = $request->all();
        $index->update($input);
        return redirect('fiscalyear')->with('flash_message', 'Contact Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fiscalyear::destroy($id);
        return redirect('fiscalyear')->with('flash_message', 'Contact deleted!');
    }
}
