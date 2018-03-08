<?php

namespace App\Components\Auth;

use App\Components\Auth\RegisterFromSocial;
use Laravel\Socialite\Facades\Socialite;

trait SocialAuthMechanism {

    use RegisterFromSocial;

	/**
	 * Define allowed provider.
	 *
	 * @var String
	 */

    protected $allowedProvider = ['facebook', 'twitter'];


    /**
     * Redirect to OAuth Provider Approval URL
     *
     * @return Illuminate\Http\Response
     */

    public function redirectToProvider($provider)
    {

    	return (in_array($provider, $this->allowedProvider)) 
    		? Socialite::driver($provider)->redirect()
    		: abort(404);

    }

    /**
     * Handling the OAuth Response Callback.
     *
     * @return Illuminate\Http\Response
     */

    public function handleProviderCallback($provider) {
    	
    	return (in_array($provider, $this->allowedProvider))
    		? $this->$provider(Socialite::driver($provider))
    		: abort(404);
    }

    /**
     * Handling callback for facebook.
     *
     * @return Illuminate\Http\Response
     */

    protected function facebook($providerCallback) {

        try {
            $user = $providerCallback->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('oauth_error', __('bio.login.oauth_error'));
        }

        $config = [
            'user' => [
                'name' => $user->user['name'],
                'email' => ($user->email == null) ? config('app.default_email') : $user->email,
                'password' => bcrypt(str_random(12))
            ],
            'token' => [
                'access_token' => encrypt($user->token),
                'provider' => 'facebook'
            ]
        ];

        return $this->register($config);
    }

    /**
     * Handling callback for twitter.
     *
     * @return Illuminate\Http\Response
     */

    public function twitter($providerCallback) {
        
        try {
            $user = $providerCallback->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('oauth_error', __('bio.login.oauth_error'));
        }

        $config = [
            'user' => [
                'name' => $user->name,
                'email' => ($user->email == null) ? config('app.default_email') : $user->email,
                'password' => bcrypt(str_random(12))
            ],
            'token' => [
                'access_token' => encrypt($user->token),
                'token_secret' => encrypt($user->tokenSecret),
                'provider' => 'twitter'
            ]
        ];

        return $this->register($config);
    }

}