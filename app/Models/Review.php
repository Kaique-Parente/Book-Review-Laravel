<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Review extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory, Notifiable;
    public function book(){
        return $this->belongsTo(Book::class);
    }
}
