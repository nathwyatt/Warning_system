<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
  protected $fillable =['name','stations_id','email','password','phone_number'];
  protected $hidden =[
    'id','timestamps'
  ];
  public function stations()
 {
  return $this->belongsTo(stations::class, 'foreign_key');
 }
 public function temperature_humidity()
 {
   return $this->hasOne(tempature_humidity::class,'foreign_key');
 }
}
