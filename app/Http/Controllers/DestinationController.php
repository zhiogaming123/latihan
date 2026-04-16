<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Support\Facades\File;

class DestinationController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');

        if ($keyword != '') {
            $destination = Destination::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $destination = Destination::orderby('id')->paginate(5);
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

    // 🔥 STORE (UPLOAD GAMBAR)
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable',
        'location' => 'required',
        'ticket_price' => 'required',
        'working_hours' => 'required',
        'working_days' => 'required',
    ]);

    $data = $validated; // 🔥 FIX PENTING

    if ($request->hasFile('image')) {

        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('images/destinations'), $filename);

        $data['image'] = $filename;
    }

    Destination::create($data);

    return redirect('/destinations')->with('success', 'Destination created successfully.');
}

    public function delete($id)
    {
        $destination = Destination::find($id);

        if ($destination) {

            // 🔥 HAPUS GAMBAR JUGA
            if ($destination->image && File::exists(public_path('images/destinations/' . $destination->image))) {
                File::delete(public_path('images/destinations/' . $destination->image));
            }

            $destination->delete();

            return redirect('/destinations')->with('success', 'Destination deleted successfully.');
        } else {
            return redirect('/destinations')->with('error', 'Destination not found.');
        }
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('pages.destination.editDestination', compact('destination'));
    }

    // 🔥 UPDATE + GANTI GAMBAR
    public function update(Request $request, $id)
{
    $destination = Destination::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable',
        'location' => 'required',
        'ticket_price' => 'required',
        'working_hours' => 'required',
        'working_days' => 'required',
    ]);

    $data = $validated;

    if ($request->hasFile('image')) {

        // hapus gambar lama
        if ($destination->image && File::exists(public_path('images/destinations/' . $destination->image))) {
            File::delete(public_path('images/destinations/' . $destination->image));
        }

        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('images/destinations'), $filename);

        $data['image'] = $filename;
    } else {
        $data['image'] = $destination->image;
    }

    $destination->update($data);

    return redirect('/destinations')->with('success', 'Destination updated successfully.');
}
}