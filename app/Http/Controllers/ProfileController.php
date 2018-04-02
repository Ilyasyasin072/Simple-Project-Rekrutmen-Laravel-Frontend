<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    public function profile($name)
    {
      $user = User::whereName($name)->first();
      return view('user.profile', compact('user'));
      //dd($user);
      //return $user;
    }
}
