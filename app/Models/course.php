<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','fees'];

    public function subjects()
    {
        return $this->hasMany(Subject::class,'course_id','id');
    }
    
}

