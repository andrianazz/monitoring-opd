<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['subtask'];

    public function subtask()
    {
        return $this->belongsTo(Subtask::class);
    }
}
