<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $table = 'files' ;
    public $timestamps = 'true';

    protected function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    protected function userFavorite()
    {
        return $this->hasMany(UserFavorite::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    protected function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
