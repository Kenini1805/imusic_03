<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFavorite extends Model
{
    protected $table = 'user_favorites';
    public $timestamps = 'true';

    protected function file()
    {
        return $this->belongsTo(File::class);
    }

    protected function user()
    {
        return $this->belongsTo(User::class);
    }
}
