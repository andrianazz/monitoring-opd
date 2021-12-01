<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['task'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
