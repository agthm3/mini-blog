<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function visitor(){
        return $this->hasMany(Visitor::class, 'visitor_id');
    }
}
