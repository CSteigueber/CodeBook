<?php

namespace App;


use App\Profile;
use App\Post;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Overtrue\LaravelFollow\Traits\CanFollow;
use Overtrue\LaravelFollow\Traits\CanBeFollowed;

class User extends Authenticatable
{
    use Notifiable, CanFollow, CanBeFollowed;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot(){

        parent::boot();

        static::created(function($user){
            $user->profile()->create();
            
        });
    }

    //link to profile

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    //link to posts

    public function post()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    // link to following
    
    public function following(){
        return $this->belongsToMany(Profile::class);
    }

}
