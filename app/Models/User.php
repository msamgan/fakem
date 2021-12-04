<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',
        'id',
        'language'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return Builder|Model|object|null
     */
    public static function randomUser()
    {
        if (request('email')) {
            return User::query()->where('email', request('email'))->first();
        }

        $user = User::query()->inRandomOrder();
        if (request('gender') && in_array(request('gender'), genders())) {
            $user->where('gender', request('gender'));
        }

        $user = $user->first();

        History::create([
            'user_id' => $user->id,
            'ip_address' => request()->getClientIp()
        ]);

        return $user;
    }

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'username';
    }
}
