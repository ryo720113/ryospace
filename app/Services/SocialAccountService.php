<?php 

namespace App\Services;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\SocialAccount;

class SocialAccountService
{
	public function createOrGetUser(ProviderUser $providerUser)
	{

		$account = SocialAccount::whereProvider('facebook')
					->whereProviderUserId($providerUser->getId())
					->first();
		if ($account) {
            return $account->user;
        } else {
        	
        	$account = new SocialAccount([
        		'provider_user_id' => $providerUser->getId(),
        		'provider' => 'facebook'
        	]);

        	$user = \App\User::whereProvider_user_id($providerUser->getId())->first();

			if(!$user) {
				$user = \App\User::create([
					'name' => $providerUser->getName(),
					'provider_user_id' => $providerUser->getId()
				]);
			}

			$account->user()->associate($user);
			$account->save();

			return $user;
    	}

	}

}