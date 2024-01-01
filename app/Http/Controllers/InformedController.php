<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informed;
class InformedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informed = Informed::all();
   
        return view('informed.index')->with('informed', $informed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informed.create');
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
        Informed::create($input);
        return redirect('informed')->with('flash_message', 'Contact Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informed = Informed::find($id);
        return view('informed.show')->with('informed', $informed);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informed = Informed::find($id);
     
        return view('informed.edit')->with('informed', $informed);
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
        $index = Informed::find($id);
        $input = $request->all();
        $index->update($input);
        return redirect('informed')->with('flash_message', 'Contact Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Informed::destroy($id);
        return redirect('informed')->with('flash_message', 'Contact deleted!');
    }
}
