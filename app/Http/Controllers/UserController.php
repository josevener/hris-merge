<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = User::all();
        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $params = $request->validate([
            'name'              =>      'required|min:1|max:60|string',
            'company_id_number' =>      'required|min:1|string',
            'isActive'              =>      'required|min:1|max:1|int',
            'role_name'              =>      'required|min:1|max:20|string',
            'profile_image'              =>      'min:1|string',
            'phone_number'              =>      'min:1|max:11|string',
            'email'              =>      'required|min:1|max:30|string',
            'password'              =>      'required|min:1|string'
        ]);

        $data = User::create($params);

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $params = $request->validate([
            'name'              =>      'required|min:1|max:60|string',
            'company_id_number' =>      'required|min:1|string',
            'isActive'              =>      'required|min:1|max:1|int',
            'role_name'              =>      'required|min:1|max:20|string',
            'profile_image'              =>      'min:1|string',
            'phone_number'              =>      'min:1|max:11|string',
            'email'              =>      'required|min:1|max:30|string',
            'password'              =>      'required|min:1|string'
        ]);

        $user->update($params);

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        $message = [
            'status'    => 200,
            'message'   => "Successfully Deleted {$user->id}"
        ];

        return response()->json($message);
    }
}
