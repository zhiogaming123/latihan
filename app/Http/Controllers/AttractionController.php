<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Attraction;

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
        return view('pages.attraction.createattraction');
    }

    public function store(Request $request)
    {
        Attraction::create($request->all());
        return redirect('/attraction')->with('success', 'Attraction created successfully.');
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
    $attraction = attraction::findOrFail($id);
    return view('pages.attraction.editattraction', compact('attraction'));
}

public function update(Request $request, $id)
{
    $attraction = attraction::findOrFail($id);
    $attraction->update($request->all());

    return redirect('/attraction')->with('success', 'attraction updated successfully.');
}

}
