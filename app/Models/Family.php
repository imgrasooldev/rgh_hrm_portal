<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Family extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
            'user_id',
            'martial_status',
            'spouse_name',
            'no_of_children',
            'father_name',
            'mother_name',
            'emergency_contact_name',
            'emergency_contact_relation',
            'emergency_contact_number',
            'emergency_residential_address',
        ];


    public function family()
    {
        $this->belongsTo(User::class);
    }

    public function store(array $data)
    {
        return Family::create($data);
    }
}
