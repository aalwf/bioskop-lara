<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'title' => 'Profile',
            'user' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {

        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->username = $request->username;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $user->image = $imageName;
            $file->storeAs('public/profile', $imageName);
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
