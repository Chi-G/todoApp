<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = 'todo';
    protected $fillable = ['todo','category','user_id','description'];

    // public function image(){
    //     return $this->belongsTo(User::class);
    // }
}
