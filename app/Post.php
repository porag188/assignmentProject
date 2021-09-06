<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // //table names
    // protected $table='posts';
    // //primary key
    // public $primaryKey='id';
    // //timestamps
    // public $timestamps=ture;


    public function user(){
      return $this->belongsTo('App\User');
    }
}
