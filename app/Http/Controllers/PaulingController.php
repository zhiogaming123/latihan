<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pauling;

class PaulingController extends Controller

{
      public function index(Request $request)
{
    $keyword = $request->input('search');

    if ($keyword != '') {
        $pauling = pauling::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
    } else { $pauling = pauling::orderby('id')->paginate(5);
    }

    return view('pages.pauling.indexPauling', compact('pauling'));
}

    public function show($id)
    {
        $pauling = pauling::findOrFail($id);
        return view('pages.pauling.detailPauling', compact('pauling'));
    }

    public function create()
    {
        return view('pages.pauling.createPauling');
    }

    public function store(Request $request)
    {
        pauling::create($request->all());
        return redirect('/pauling')->with('success', 'pauling created successfully.');
    }

    public function delete($id)
    {
        $pauling = pauling::find($id);
        if ($pauling) {
            $pauling->delete();
            return redirect ('/pauling')->with ('success', 'pauling deleted successfully.');
        } else {
            return redirect('/pauling')->with('error', 'pauling not found.');
        }
    }

    public function edit($id)
{
    $pauling = pauling::findOrFail($id);
    return view('pages.pauling.editPauling', compact('pauling'));
}

public function update(Request $request, $id)
{
    $pauling = pauling::findOrFail($id);
    $pauling->update($request->all());

    return redirect('/pauling')->with('success', 'pauling updated successfully.');
}

}