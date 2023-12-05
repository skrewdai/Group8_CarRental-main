<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        "pickup",
        "return",
        "pickdate",
        "retdate",
        "fname",
        "email",
        "phone",
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
