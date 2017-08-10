<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;

class SocialController extends Controller
{
    /**
     * Redirect the user to authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($driver)
    {
        return Socialite::driver($driver)->redirect();
    }

    /**
     * Obtain the user information from Driver Provider.
     *
     * @return Response
     */
    public function handleProviderCallback($driver)
    {
        $user = Socialite::driver($driver)->user();

        // $user->token;
    }

}
