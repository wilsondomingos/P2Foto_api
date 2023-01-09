<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    protected $fillable =[
        'foto','album_id'
    ];
    public function album(){
        return $this->belongsTo(album::class);
    }
}
