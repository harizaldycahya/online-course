<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function materi()
    {
        return $this->hasMany('App\Materi');
    }
}
