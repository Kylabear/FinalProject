<?php

namespace App\Http\Controllers;

use App\Models\ClearanceRequest;
use Illuminate\Http\Request;

class ClearanceRequestController extends Controller
{
    /**
     * Display a listing of the clearance requests.
     */
    public function index()
    {
        $requests = ClearanceRequest::all(); // get all records
        return view('clearance_requests.index', compact('requests'));
    }
    /**
     * Show the form for creating a new clearance request.
     */
    public function create()
    {
        return view('clearance_requests.create');
    }

    /**
     * Store a newly created clearance request.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'purpose' => 'required',
            'address' => 'required',
        ]);

        ClearanceRequest::create($request->all());

        return redirect('/clearance-requests')->with('success', 'Clearance request submitted!');
    }


    /**
     * Print Clearance form request.
     */
    public function print($id)
{
    $request = ClearanceRequest::findOrFail($id);
    return view('clearance_requests.print', compact('request'));
}

}
