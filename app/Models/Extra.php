<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory;

    protected $table = 'extras';

    protected $fillable = ['name'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_extra', 'extra_id', 'student_id');
    }
}
