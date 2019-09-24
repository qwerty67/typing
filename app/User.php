<?php

namespace App;

use App\Model\Content;
use App\Model\Role;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


//\TCG\Voyager\Models\User
class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    protected $table = 'users';

    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
//        'password',
        'family',
        'username',
        'email',
        'avatar',
        'phone',
        'gender',
        'job',
        'description',
        'city',
        'setting',
        'role_id',
        'created_at',
        'updated_at',
//        'remember_token',
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

    public function role()
    {
        $this->belongsTo(Role::class);
    }

    public function rolesRelation()
    {
        return $this->belongsToMany(
            Role::class,
            'user_roles',
            'user_id',
            'role_id'
        );
    }

    public function contentsRelation()
    {
        return $this->hasMany(Content::class);
    }
}
