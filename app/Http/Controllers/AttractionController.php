<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\Destination;

class AttractionController extends Controller
{
    public function index(Request $request)
{
    $keyword = $request->input('search');

    if ($keyword != '') {
        $attraction = Attraction::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
    } else { $attraction = Attraction::orderby('id')->paginate(5);
    }

    return view('pages.attraction.indexAttraction', compact('attraction'));
}

    public function show($id)
    {
        $attraction = Attraction::findOrFail($id);
        return view('pages.attraction.detailattraction', compact('attraction'));
    }

    public function create()
    {
        $destinations= Destination::all();
        return view('pages.attraction.createAttraction', compact('destinations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'destination_id' =>'required|exists:destinations,id',       
                'name' => 'required|string|max:255',
                'description' => 'nullable',
            ]
        );
        \App\Models\Attraction::create($validated);
        return redirect()->route('attraction.index')->with('success', 'Attraction created successfully.');
    }

    public function delete($id)
    {
        $attraction = Attraction::find($id);
        if ($attraction) {
            $attraction->delete();
            return redirect ('/attraction')->with ('success', 'attraction deleted successfully.');
        } else {
            return redirect('/attraction')->with('error', 'attraction not found.');
        }
    }

    public function edit($id)
{
    $destinations=Destination::all();
    $attraction = \App\Models\Attraction::findOrFail($id);
    return view('pages.attraction.editattraction', compact('attraction', 'destinations'));
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
            'name' =>'required',
            'description'=>'nullable',
        ]);

        $Attraction = \App\Models\Attraction::findOrFail($id);
        $Attraction->update($validated);

    return redirect('/attraction')->with('success', 'attraction updated successfully.');
}

}
