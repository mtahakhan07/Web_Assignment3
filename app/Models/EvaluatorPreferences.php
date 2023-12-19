<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluatorPreferences extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'specialty_area',
        // Add other preference fields here
    ];

    // Define a relationship with the User model (assuming User is the model for evaluator users)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
