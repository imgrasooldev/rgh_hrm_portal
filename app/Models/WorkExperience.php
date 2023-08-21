<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkExperience extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'previous_company_name',
        'service_duration',
        'department',
        'designation',
        'refference_name',
        'refference_no',
        'refference_designation',
    ];

    public function work()
    {
        $this->belongsTo(User::class);
    }

    public function store(array $data)
    {
        return WorkExperience::create($data);
    }
}
