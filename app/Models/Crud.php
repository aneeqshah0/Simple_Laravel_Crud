<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'user_id', 'id');
    }
}
