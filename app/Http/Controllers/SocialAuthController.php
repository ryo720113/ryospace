<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Socialite;
use App\Services\SocialAccountService;

class SocialAuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(SocialAccountService $service)
    {
        //$user = Socialite::driver('facebook')->user();
        $user = $service->createorGetUser(Socialite::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/home');

    }

}
