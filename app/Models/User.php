<?php

namespace App\Models;

use Illuminate\Auth\Contracts\CanResetPassword;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Notifications\Notifiable;

class User extends Model implements Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];
    use AuthenticableTrait;
    protected $table = 'users' ;
    public $timestamps = 'true';

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
