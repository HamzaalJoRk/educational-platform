<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contentType extends Model
{
    use HasFactory;
    public function sessionscontent()
    {
        return $this->hasMany(session::class,'ContentId');
    }
}
