<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = ['Taylor', 'Bob', 'Mac'];
        $starts = $request->query('starts');

        if ($starts) {
            $users = array_filter($users, function ($user) use ($starts) {
                return str_starts_with($user, $starts);
            });
        }

        return response()->json($users, 201);
    }
}
