<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio_gallerie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function portofolio(){
        return $this->belongsTo(Portofolio::class, 'portofolio_id');
    }
}
