<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param int $id
     * @return Response
     */
    public function showProfile($id) {
        $user = User::findOrFail($id);
        return view('user', ['user' => $user]);
    }

}
