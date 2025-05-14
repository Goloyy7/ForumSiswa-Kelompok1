<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $table = 'post';

    protected $primaryKey = 'post_id';

    protected $fillable = ['student_id', 'title', 'content', 'is_anonymous'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
