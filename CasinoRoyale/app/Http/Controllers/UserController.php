<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Users;

class UserController extends Controller
{
    public function get(): Response
    {
        $users = Users::all();
        if (isset($users))
        {
            return response($users, 200);
        }
        return response("Not Found!", 400);
    }
    public function update(Request $request, $id) : Response
    {
        $user = Users::find($id);
        $user->UserName = $request->input('UserName');
        $user->Email = $request->input('Email');
        $user->Balance = $request->input('Balance');
        $user->PFP = $request->input('PFP');
        $user->update();
        return response("Finally",200);
    }
    public function delete($id) : Response
    {
        $user = Users::find($id);
        if (isset($user))
        {
            $user->delete();
            return response("Removed",200);
        }
        return response("Not Found!",400);
    }
}
