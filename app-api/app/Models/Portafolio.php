<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Blog;

class Portafolio extends Model
{
    protected $guarded=[];
    use HasFactory;
    
    // protected $fillable = [
    //     'nombre',
    //     'descripcion',
    //     'categoria',
    //     'imagen',
    //     'url'
    // ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function blogs(){
        return $this->hasMany(Blog::class);
    }
}
