<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = 'artists' ;
    public $timestamps = 'true';

    public function file()
    {
        return $this->hasMany(File::class);
    }
    public function userfavorite()
    {
        return $this->hasMany(UserFavorite::class);
    }
}
