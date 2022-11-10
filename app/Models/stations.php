<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stations extends Model
{
    protected $fillable =[
        'stations_name','district'
      ];
      protected $hidden =[
        'id','timestamps','admin_id'
      ];
      public function admins()
     {
      return $this->belongsTo(admins::class, 'foreign_key');
     }
     public function users()
     {
      return $this->hasMany(users::class, 'foreign_key');
     }
}
