<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\MassAssignment;

class cart extends Model
{
    protected $fillable = [
        'title',
        
    ];
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    use HasFactory;
}
