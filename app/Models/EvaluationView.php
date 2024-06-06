<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationView extends Model
{
    use HasFactory;
    protected $fillable = ['evaluation_id', 'user_id', 'viewed_by'];

    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
