<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Incident;
use  App\Models\MemberIncident;
use App\Models\Member;
use App\Models\Fiscalyear;
use App\Models\Informed;

class IncidentController extends Controller
{
    public function index()
    {
        $incidents = Incident::all();

        return view('incidents.index')->with('incidents', $incidents);
    }
    
    public function create()
    {
        
        $currentfiscalyear=Fiscalyear::where('status',1)->first();
        $highestIndex=Incident::where('fiscal_year_id',$currentfiscalyear->id)->max('highest_index')+1;
        $incident_report_no=
        str_pad(
            $highestIndex.'/'.$currentfiscalyear->fiscal_year,
            3, // as per your requirement.
            '0',
            STR_PAD_LEFT
        );
        return view('incidents.create', compact('currentfiscalyear','highestIndex','incident_report_no'));
    }
    public function store(Request $request)
    {
        //  dd($request->all());
        $input = $request->all();
        Incident::create($input);
        return redirect('incident')->with('flash_message', 'Contact Addedd!');
    }

    public function show(string $id)
    {
        // $incidents = Report::find($id);
        $incidents = Incident::with('members')->find($id);
        $inform =  Incident::with(['members', 'inform'])->find($id);
        $response =  Incident::with(['members', 'response'])->find($id);
        // dd($inform);
        // dd($incidents->members);
        $members = Member::get();
        $memberincidents = MemberIncident::where('incidents_id', $id);
        // dd($memberincidents->first()->report->id);

        return view('incidents.show', compact('incidents', 'members', 'memberincidents', 'inform', 'response'));
    }
    public function add()
    {

        return view('incidents.add');
    }

    public function edit(string $id)
    {
        $incidents = Incident::find($id);
        return view('incidents.edit')->with('incidents', $incidents);
    }

    public function update(Request $request, string $id)
    {
        
        $index = Incident::find($id);
        $input = $request->all();
        $index->update($input);
        return redirect('incident')->with('flash_message', 'Contact Updated!');
    }
    public function destroy(string $id)
    {
        Incident::destroy($id);
        return redirect('incident')->with('flash_message', 'Contact deleted!');
    }

    public function details(Request $request)
    {
        return $request->input();
    }
    public function members(Request $request)
    {
        return $request->input();
    }
    public function status(Request $request)
    {
        return $request->input();
    }
    public function addMemberToIncident(Request $request)
    {
        $report = Incident::findOrFail($request->report_id);
        // dd($report);
        $report->members()->attach($request->member_id);
        return redirect()->route('incident.show', $request->report_id)->with('success', 'Members added succesfully!');
    }

    public function removeMemberFromIncident(Request $request, $id)
    {
        // dd($request->incident_id);
        $report = Incident::findOrFail($request->report_id);
        $report->members()->detach($request->member_id);
        return redirect()->route('incident.show', $request->report_id)->with('success', 'Members removed succesfully!');
        //1. save it to pivot table members_incidents //incident_id, member_id
        //2. redirect back to report show
        // return redirect()->route('index.show')->with('success', 'Members added succesfully!');
    }
    public function addInformToIncident(Request $request)
    {
        $inform = Incident::findOrFail($request->report_id);
        // dd($report);
        $inform->inform()->attach($request->member_id);
        return redirect()->route('incident.show', $request->report_id)->with('success', 'Members added succesfully!');
    }
    public function removeInformFromIncident(Request $request)
    {
        // dd($request['report_id']);
        $inform = Incident::findOrFail($request['report_id']);
        // dd($inform->inform());
        $inform->inform()->detach($request['member_id']);
        return redirect()->route('incident.show', $request['report_id'])->with('success', 'Members removed succesfully!');
    }
    public function addResponseToIncident(Request $request)
    {
        $response = Incident::findOrFail($request->report_id);
        // dd($report);
        $response->response()->attach($request->member_id);
        return redirect()->route('incident.show', $request->report_id)->with('success', 'Members added succesfully!');
    }
    public function removeResponseFromIncident(Request $request)
    {

        $response = Incident::findOrFail($request['report_id']);
        $response->response()->detach($request['member_id']);
        return redirect()->route('incident.show', $request['report_id'])->with('success', 'Members removed succesfully!');
    }
    public function dashboard(Request $request)
    {
        $pendingIncident = Incident::where('status', '1')->get();
        $solvedIncident = Incident::where('status', '0')->get();
        
    }
}   
