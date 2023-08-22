<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Doc extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'doc_category_id',
        'name'
    ];

    public function doc()
    {
        $this->belongsTo(User::class);
    }

    public function store($fileName, $id){
        return Doc::create([
            'user_id' => Auth::user()->id,
            'doc_category_id' => $id,
            'name' => $fileName,
        ]);
    }

}
