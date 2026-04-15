<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index(Request $request)
{
    $keyword = $request->input('search');

    if ($keyword != '') {
        $destination = Destination::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
    } else { $destination = Destination::orderby('id')->paginate(5);
    }

    return view('pages.destination.indexDestinasi', compact('destination'));
}

    public function show($id)
    {
        $destination = Destination::findOrFail($id);
        return view('pages.destination.detaildestinasi', compact('destination'));
    }

    public function create()
    {
        return view('pages.destination.createDestination');
    }

    public function store(Request $request)
    {
        Destination::create($request->all());
        return redirect('/destinations')->with('success', 'Destination created successfully.');
    }

    public function delete($id)
    {
        $destination = Destination::find($id);
        if ($destination) {
            $destination->delete();
            return redirect ('/destinations')->with ('success', 'Destination deleted successfully.');
        } else {
            return redirect('/destinations')->with('error', 'Destination not found.');
        }
    }

    public function edit($id)
{
    $destination = Destination::findOrFail($id);
    return view('pages.destination.editDestination', compact('destination'));
}

public function update(Request $request, $id)
{
    $destination = Destination::findOrFail($id);
    $destination->update($request->all());

    return redirect('/destinations')->with('success', 'Destination updated successfully.');
}



}