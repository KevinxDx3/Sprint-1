<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portafolio;

class Blog extends Model
{
    protected $guarded=[];
    use HasFactory;
    public function Portafolio(){
        return $this->belongTo(Portafolio::class);
    }

}
