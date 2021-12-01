<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['government'];

    public function government()
    {
        return $this->belongsTo(Government::class);
    }
}
