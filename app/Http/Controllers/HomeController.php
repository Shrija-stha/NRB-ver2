<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Contact;

class HomeController extends Controller
{
    public function users()
    {
        return view('layout.users');
    }
    public function record()
    {
        return view('layout.record');
    }
    public function tables()
    {
        return view('layout.tables');
    }



    // public function index()
    // {
    //     $addnewincidentdetails = Contact::all();
   
    //     return view('addnewincidentdetails.index')->with('addnewincidentdetails', $addnewincidentdetails);
    // }
    // public function create()
    // {
    //     return view('addnewincidentdetails.create');
    // }
    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     $input = $request->all();
    //     Contact::create($input);
    
    //     return redirect('index')->with('flash_message', 'Contact Addedd!');
    // }
    // public function show(string $id)
    // {
    //     $contact = Contact::find($id);
      
    //     return view('addnewincidentdetails.show')->with('addnewincidentdetails', $contact);
     
    // }
    // public function edit(string $id)
    // {
    //     $contact = Contact::find($id);
     
    //     return view('addnewincidentdetails.edit')->with('addnewincidentdetails', $contact);
    // }
    // public function update(Request $request, string $id)
    // {
    //     $index = Contact::find($id);
    //     $input = $request->all();
    //     $index->update($input);
    //     return redirect('index')->with('flash_message', 'Contact Updated!');
    // }
    // public function destroy(string $id)
    // {
    //     Contact::destroy($id);
    //     return redirect('index')->with('flash_message', 'Contact deleted!');
    // }
    public function detailspage()
    {
        return view('layout.detailspage');
    }
    public function memberspage()
    {
        return view('layout.memberspage');
    }
    public function statuspage()
    {
        return view('layout.statuspage');
    }
    public function response(Request $request){
        return $request->input();
    }
    public function involved(Request $request){
        return $request->input();
    }
    public function status(Request $request){
        return $request->input();
    }
}

    

    
    
    
    
    
    


