<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\EmailTemplate;
use Illuminate\Http\Request;
use App\Events\NewUserRegistered;
use App\Events\Email\SentMail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['verify']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $template = EmailTemplate::where('slug', 'user.email_activation')->first();
        $this->validator($request->all())->validate();
        $user = $this->create($request->all());

        $this->guard()->login($user);
        // dd(user()->login);
        event(new SentMail($template, [], user()->email));

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'phone_id' => 'null',
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_token' => encrypt($data['email'])
        ]);
    }

    public function verify($token) {

        try {
            $email = decrypt($token);
        } catch (\Exception $e) {
            return abort(404);
        }

        $user = User::where('email', $email)->first();

        if(!$user) {
            return abort(404);
        }

        if($user->verified) {
            return redirect('/');
        }

        $user->update(['verified' => true]);

        return redirect('/');
    }
}
