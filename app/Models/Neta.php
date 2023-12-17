<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Neta extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'title',
    'url',
    'body',
    'keyword',
    'public_private',
    'access_count',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
