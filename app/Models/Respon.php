<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Interview;
class Respon extends Model
{
    use HasFactory;
    protected $fillable = [
        'interview_id',
        'status',
        'date',
    ];

    public function interview()
    {
        return $this->belongsTo
        (Interview::class);
    }
}
