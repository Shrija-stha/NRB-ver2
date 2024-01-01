<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
   
        return view('members.index')->with('members', $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
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
        Member::create($input);
        return redirect('member')->with('flash_message', 'Contact Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $members = Member::find($id);
        return view('members.show')->with('members', $members);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Member::find($id);
     
        return view('members.edit')->with('members', $members);
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
        $index = Member::find($id);
        $input = $request->all();
        $index->update($input);
        return redirect('member
        
        ')->with('flash_message', 'Contact Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::destroy($id);
        return redirect('member')->with('flash_message', 'Contact deleted!');
    }
    // function data(Request $request){
    //     $members_code = $request ->input('members_code');
    //     $members_name = $request ->input('members_name');
    //     $members_designation = $request ->input('members_designation');
    //     $members_unit = $request ->input('members_unit');
    //     $findings = $request ->input('findings');
    //     $action_taken = $request ->input('action_taken');
        
    //     $isInsertSuccress = members::insert(['members_code' => $members_code,
    //                                 'members_name' =>$members_name,
    //                                 'members_designation' =>$members_designation,
    //                                 'members_unit' =>$members_unit,
    //                                 'findings' =>$findings,
    //                                 'action_taken' =>$action_taken,
    // ]);
    // if($isInsertSuccress){

    //  echo '<h1>Insert Success</h1>';
    //  die();
    // }
    // else echo '<h1>Insert Failed</h1>';
    // }
}
