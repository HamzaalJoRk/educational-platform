<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    use HasFactory;
    public function userrols()
    {
        return $this->hasMany(userRols::class,'RoleId');
    }
    public function coursesuser()
    {
        return $this->hasMany(coursesUser::class,'RoleId');
    }
}
