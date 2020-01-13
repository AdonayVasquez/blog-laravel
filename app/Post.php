<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['titulo','contenido','image_url','userid'];

    public function user()
    {
        return $this->belongsTo('App\User', 'userid');
    }
}
