<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\Cast\Array_;

class Personal extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'personal_email',
        'date_of_birth',
        'gender',
        'religion',
        'personal_contact_number',
        'residential_address',
        'permanent_address',
        'cnic',
        'meezan_bank',
        'iban_number',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function store(array $data)
    {
        return Personal::create($data);
    }
}
