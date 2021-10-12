<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostMail;
class Post extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function category(){
        return $this->belongsTo(Category::class,"category_id","id");
    }
    // protected static function booted()
    // {
    //     static::created(function ($post) {
    //         Mail::to("aungkaungkhantakk123321@gmail.com")->send(new PostMail($post));
    //     });
    // }
}
