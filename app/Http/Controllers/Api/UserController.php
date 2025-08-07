<?php 

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Users = User::all();
        return response()->json($Users);
    }
    public function store(Request $request)
    {
        $Users = User::create($request->all());
        return response()->json($Users, 201);
    }
    public function show(User   $Users)
    {
        return response()->json($Users, 201);
    }
    public function update(Request $requests, User $User)
    {
        $User->update($requests->all());
        return response()->json($User);
    }

    public function destroy(User $Users)
    {
        $Users->delete();
        return response()->json(null, 204);
    }
}
