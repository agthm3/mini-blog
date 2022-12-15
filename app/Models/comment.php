<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class comment extends Model
{
    use HasFactory;


    public function article(){
        return $this->belongsTo(article::class, 'article_id');
    }

    public function visitor(){
        return $this->belongsTo(Visitor::class, 'visitor_id');
    }
}
