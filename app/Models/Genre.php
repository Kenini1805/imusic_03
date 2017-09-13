<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

    protected $table = 'genres' ;
    public $timestamps = 'true';
    public function file()
    {
        return $this->hasMany(File::class);
    }
}
