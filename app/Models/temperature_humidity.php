<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temperature_humidity extends Model
{
    protected $table = 'temperature-humidity';
    protected $primaryKey = 'id';
    protected $fillable=['details'];

    public function stations(){
return $this->belongsTo(stations::class,'foreign_key');
    }
    
}
