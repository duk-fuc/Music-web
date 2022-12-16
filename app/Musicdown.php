<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Musicdown extends Model
{
    protected $table = 'musicsdown';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','music_id'];
    //
    public function music()
    {
        return $this->belongsTo('App\Music', 'music_id');
    }
}
