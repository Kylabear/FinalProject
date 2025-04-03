<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;

class ResidentController extends Controller
{
    public function create()
    {
        return view('residents.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'contact_number' => 'nullable',
        ]);

        Resident::create($data);

        return redirect()->back()->with('success', 'Resident registered successfully!');
    }

    public function index() {
        $residents = Resident::all();
        return view('residents.index', compact('residents'));
    }
    
}
