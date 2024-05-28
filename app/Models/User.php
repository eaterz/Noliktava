<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Event;




class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function boot()
    {
        parent::boot();

        // Attach a listener to the login event
        Event::listen(Login::class, function ($event) {
            $user = $event->user;

            Activity::create([
                'user_id' => $user->id,
                'activity_type' => 'login',
                'subject_id' => $user->id,
                'subject_type' => User::class,
                'description' => "User {$user->name} logged in.",
            ]);
        });


        // Attach a listener to the logout event
        Event::listen(Logout::class, function ($event) {
            $user = $event->user;

            if ($user) { // Check if $user is not null, as $user might be null in case of session expiration
                Activity::create([
                    'user_id' => $user->id,
                    'activity_type' => 'logout',
                    'subject_id' => $user->id,
                    'subject_type' => User::class,
                    'description' => "User {$user->name} logged out.",
                ]);
            }
        });
    }



}
