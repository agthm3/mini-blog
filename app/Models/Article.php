<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\article_gallerie;
use App\Models\tag;
use App\Models\comment;

class article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function galleries(){
    return $this->hasmany(article_gallerie::class, 'article_id');
}

    public function tags(){
        return $this->hasMany(tag::class, 'article_id');
    }

    public function comments(){
        return $this->hasMany(comment::class, 'article_id');
    }
}


