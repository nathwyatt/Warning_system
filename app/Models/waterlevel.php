<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class waterlevel extends Model
{
    protected $table = 'waterlevel';
    protected $primaryKey = 'id';
    protected $fillable=['details'];

    public function stations(){
return $this->belongsTo(stations::class,'foreign_key');
    }
    
}
