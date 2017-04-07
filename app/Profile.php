<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = ['display_name'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
