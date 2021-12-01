<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Government extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function officers()
    {
        return $this->hasMany(Officer::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
