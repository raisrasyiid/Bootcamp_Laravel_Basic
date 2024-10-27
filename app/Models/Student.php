<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'fullname',
        'gender',
        'nis',
        'class_id'
    ];

    // !!!jika nama table ini dalam bentuk plural, maka syntax dibawah ini tidak perlu dituliskan. !!!
    // protected $table = 'students';

    // !!!jika nama kolom key 'id', maka syntax dibawah ini tidak perlu dituliskan. !!!
    // protected $primaryKey = 'id';

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function extra()
    {
        return $this->belongsToMany(Extra::class, 'student_extra', 'student_id', 'extra_id');
    }
}
