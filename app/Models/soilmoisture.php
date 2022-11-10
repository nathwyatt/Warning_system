<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soilmoisture extends Model
{
    protected $table = 'soilmoisture';
    protected $primaryKey = 'id';
    protected $fillable=['details'];

    public function stations(){
return $this->belongsTo(stations::class,'foreign_key');
    }
    
}
