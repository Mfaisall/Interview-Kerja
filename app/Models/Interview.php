<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Respon;
class Interview extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'age',
        'no_telp',
        'last_education',
        'education_name',
        'file',
    ];

    public function respon()
    {
        return $this->hasOne
        (Respon::class);
    }
}
