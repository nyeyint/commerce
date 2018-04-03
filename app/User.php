<?php

namespace App;

use App\Address;
use App\Mail\ForgotPassword;
use App\Events\Email\SentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone_id', 'email', 'password','role_id', 'access_token_id', 'email_token', 'verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function token()
    {
        return $this->belongsTo('App\Token', 'access_token_id');
    }


    public function carts()
    {
        return $this->hasMany('App\Cart', 'user_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Order', 'user_id');
    }

    public function address()
    {
        return $this->hasMany('App\Address', 'user_id');
    }

    public function getAddress($id)
    {
        return Address::where('id', $id)->first();
    }

    public function phone()
    {
        return $this->belongsTo('App\UserPhone', 'phone_id');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */

    public function sendPasswordResetNotification($token)
    {
        $email = $this->getEmailForPasswordReset();
        $user  = $this->where('email', $email)->first();

        $data = [
            'token' => $token,
            'user'  => $user
        ];

        $template = email_template('user.reset_password');

        event(new SentMail($template, $data, $email));
    }
}
