<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    protected $primaryKey = 'comment_id';

    protected $fillable = ['post_id', 'student_id', 'content'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
