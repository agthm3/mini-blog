<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\article;

class article_gallerie extends Model
{
    use HasFactory;

    public function article(){
        return $this->belongsTo(article::class, 'article_id');
    }


}
