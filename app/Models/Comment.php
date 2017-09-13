<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments' ;
    public $timestamps = 'true';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
