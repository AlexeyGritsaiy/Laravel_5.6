<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    //
    public function user($userId, $user2)
    {
        return view('user', compact('userId'))->withSecondUser($user2);
    }

}
