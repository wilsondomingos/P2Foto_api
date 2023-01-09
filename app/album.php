<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $fillable =[
        'titulo','user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function foto(){
        return $this->hasMany(foto::class);
    }
}
