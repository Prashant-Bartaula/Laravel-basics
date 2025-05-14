<?php

namespace App\Models;

use App\Models\User;//importing user model to reference it in the post model
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model//Model is a base class for all Eloquent models. It represents the posts table in your database by default. Laravel auto-links models to the plural form of the class name, unless you override it.
{
    use HasFactory;

    protected $fillable=['title', 'body', 'user_id'];//If a field is not in $fillable, Laravel will ignore it for security reasons.

    public function user(){
        
        return $this->belongsTo(User::class, 'user_id');//This defines a relationship between the Post and User model.When you call the belongsTo() method on a model, it returns an Eloquent relationship instance that enables you to access the related model.
    }
}
