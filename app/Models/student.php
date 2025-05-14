<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = 'student';

    protected $primaryKey = 'student_id';

    protected $fillable = ['username', 'email', 'password', 'photo'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'student_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'student_id');
    }
}
