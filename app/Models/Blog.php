<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(Crud::class, 'user_id', 'id');
    }
}
