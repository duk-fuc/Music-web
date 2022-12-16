<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    protected $primaryKey = 'id';
    protected $fillable = ['name','image','content','year','slug','view','featured'];
    public function music(){
        return $this->hasMany('App\Music');
    }
}
