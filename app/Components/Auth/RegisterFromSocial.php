<?php 

namespace App\Components\Auth;

use App\User;
use App\Token;
use Illuminate\Support\Facades\Auth;
use App\Events\SocialMediaRegistered;

trait RegisterFromSocial {

	/**
	 * The wrapper for confug array
	 *
	 * @var array
	 */

	protected $config;

	/**
	 * The wrapper for user object.
	 *
	 * @var User Object
	 */

	protected $user;

	public function register(array $config) {

		$this->config = $config;

		if($this->userExists()) {
			Auth::loginUsingId($this->user->id);

			return redirect('/home');
		}

		$user = User::create([
			'name' => $config['user']['name'],
			'email' => $config['user']['email'],
			'password' => $config['user']['password']
		]);

		$config['token']['user_id'] = $user->id;

		$token = Token::create($config['token']);

		User::where('id', $user->id)->update(['access_token_id' => $token->id]);

		event(new SocialMediaRegistered($user));

		Auth::loginUsingId($user->id);

		return redirect('/home');
	}

	public function userExists() {
		$user = User::where('email', $this->config['user']['email'])->first();

		return ($user)
			? $this->user = $user
			: false;
	}



}