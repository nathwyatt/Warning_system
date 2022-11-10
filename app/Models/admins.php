<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address','password', 'mobile'];

    public function stations()
    {
     return $this->hasMany(stations::class, 'foreign_key');
    }
}
