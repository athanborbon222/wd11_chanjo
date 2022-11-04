<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //
    public function index()
    {
        return view ('frontend.users.profile');
    }

    public function updateUserDetails(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'digits:11'],
            'address' => ['required', 'string', 'max:499'],
        ]);

        $user = User::findorFail(Auth::user()->id);
        $user->update([
            'name' => $request->name
        ]);

        $user->userDetail()->upDateorCreate(
            [
                'user_id' => $user->id,
            ],

            [
                'phone' => $request->phone,
                'address' => $request->address,
            ]

            
        );

        return redirect()->back()->with('message', 'Account Information Updated!!');
    }
}
