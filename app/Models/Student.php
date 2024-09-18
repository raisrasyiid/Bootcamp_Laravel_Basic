<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // !!!jika nama table ini dalam bentuk plural, maka syntax dibawah ini tidak perlu dituliskan. !!!
    // protected $table = 'students';

    // !!!jika nama kolom key 'id', maka syntax dibawah ini tidak perlu dituliskan. !!!
    // protected $primaryKey = 'id';

    protected $fillable = ['fullname', 'gender', 'nis', 'class_id'];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
