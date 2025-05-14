<?php

//Laravel models (like your User model) are built on Eloquent ORM (Object-Relational Mapping). Eloquent makes it easy to work with the database using PHP objects. Laravel models seems empty but  Laravel models are not just data containers — they are powerful gateways between your database and application logic.They provide bunch of helper methods that make it easy to retrieve, insert, update, and delete data from your database using the eloquent ORM.
namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

     //This tells Laravel to allow these fields to be mass assigned, like when creating a new user. mass assigning means assigning multiple fields at once using associative array. 
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    //This tells Laravel to exclude these fields from JSON output, like when returning a user from an API:
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed'
        ];
    }


    public function UsersCoolPosts(){
        return $this->hasMany(Post::class, 'user_id');//this refers to current User object($user = new User()). hasMany() is a built-in Laravel method that tells Eloquent:“This user has many related records in another table.. We are relating User to Post model with 'userid' as a foreign key of the post table. This returns a relationship object when called.
    }
}
