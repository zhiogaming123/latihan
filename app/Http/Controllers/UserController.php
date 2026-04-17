<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function index(Request $request)
{
    $keyword = $request->input('search');

    if ($keyword != '') {
        $users = User::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
    } else {
        $users = User::orderBy('id')->paginate(5);
    }

    return view('pages.user.indexUser', compact('users'));
}


    public function create()
    {
        return view('pages.user.createUser');
    }

    public function store(Request $request)
    {
       $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required',
                'password'=>'required',

            ]);
        \App\Models\user::create($validated);
        return redirect()->route('user.index')->with('success', 'users created successfully.');
    }

    public function delete($id)
    {
        $user = user::find($id);
        if ($user) {
            $user->delete();
            return redirect ('/users')->with ('success', 'user deleted successfully.');
        } else {
            return redirect('/users')->with('error', 'user not found.');
        }
    }

    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('pages.user.editUser', compact('user'));
    
}


public function update(Request $request, $id)
{
    
   $validated = $request->validate([
            'name' =>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $Attraction = \App\Models\User::findOrFail($id);
        $Attraction->update($validated);

    return redirect()->route('user.index')->with('success', 'user updated successfully.');
}

public function show($id)
{
    $user = User::findOrFail($id); // ✅ kalau tidak ada → otomatis 404
    return view('pages.user.showUser', compact('user'));
}
}