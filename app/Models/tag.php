<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\article;

class tag extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function article(){
        return $this->belongsTo(article::class, 'article_id');
    }
}
