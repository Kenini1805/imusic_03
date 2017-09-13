<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = 'true';
    
    public function file()
    {
        return $this->hasMany(File::class);
    }
}
