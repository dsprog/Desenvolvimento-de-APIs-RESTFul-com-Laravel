<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';
    protected $fillable = ['title', 'code'];
    
    public function account(){
        return $this->hasMany('App\Account');
    }
}
