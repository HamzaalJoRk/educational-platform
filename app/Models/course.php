<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable=['CourseName','Details'];
    protected $hidden=['created_at','updated_at'];
//    public function sessions()
//    {
//        return $this->hasMany(session::class,'CourseId');
//    }
    public function user()
    {
        return $this->belongsToMany('App\Models\User','courses_users','CourseId','UserId');
    }
    public function session()
    {
        return $this->hasMany('App\Models\session','CourseId');
    }

}
