<?php

namespace App;
use App\Notifications\VerifyEmail;
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
        'name', 'email', 'password', 'verification_token_email', 'verified', 'first_name', 'last_name', 'birthdate', 'address', 'mobile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function verified()
    {
      //return $this->verification_token_email === null; //Method1
      return $this->verified === 1;
    }

    public function sendVerificationEmail()
    {
      $this->notify(new VerifyEmail($this));
    }
}
