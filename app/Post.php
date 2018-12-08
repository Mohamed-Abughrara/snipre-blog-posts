<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     // Table Name if yu wont 
     protected $table = 'posts';
     // Primary Key the set 
     public $primaryKey = 'id';
     // Timestamps for every move on 
     public $timestamps = true;
     //reltion manger user to posts 
     public function user(){
          return $this->belongsTo('App\User');
      }

}
