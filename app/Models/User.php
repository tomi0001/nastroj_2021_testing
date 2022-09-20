<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function ifExistLevelMood(int $idUsers) {
         return self::select("level_mood0")->select("level_mood1")->where("id",$idUsers)->first();
    }
    public static function readLevelMood(int $idUsers) {
        return self::selectRaw("level_mood_10 as level_mood_10")
                ->selectRaw("level_mood_9 as level_mood_9")
                ->selectRaw("level_mood_8 as level_mood_8")
                ->selectRaw("level_mood_7 as level_mood_7")
                ->selectRaw("level_mood_6 as level_mood_6")
                ->selectRaw("level_mood_5 as level_mood_5")
                ->selectRaw("level_mood_4 as level_mood_4")
                ->selectRaw("level_mood_3 as level_mood_3")
                ->selectRaw("level_mood_2 as level_mood_2")
                ->selectRaw("level_mood_1 as level_mood_1")
                ->selectRaw("level_mood0 as level_mood0")
                ->selectRaw("level_mood1 as level_mood1")
                ->selectRaw("level_mood2 as level_mood2")
                ->selectRaw("level_mood3 as level_mood3")
                ->selectRaw("level_mood4 as level_mood4")
                ->selectRaw("level_mood5 as level_mood5")
                ->selectRaw("level_mood6 as level_mood6")
                ->selectRaw("level_mood7 as level_mood7")
                ->selectRaw("level_mood8 as level_mood8")
                ->selectRaw("level_mood9 as level_mood9")
                ->selectRaw("level_mood10 as level_mood10")

                ->where("id",$idUsers)->first();
    }
}
