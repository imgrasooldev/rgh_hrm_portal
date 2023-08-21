<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'institute_name',
        'degree_title',
        'degree_majors',
        'year_of_passing',
    ];

    public function education()
    {
        $this->belongsTo(User::class);
    }

    public function store(array $data)
    {
        return EducationDetail::create($data);
    }
}
