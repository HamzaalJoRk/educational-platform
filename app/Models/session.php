<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    use HasFactory;
    public function attendance()
    {
        return $this->hasMany(attendance::class,'SessionId');
    }
    public function sessionscontent()
    {
        return $this->hasMany(attendance::class,'SessionId');
    }
}
