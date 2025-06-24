<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory, Notifiable;
    public function reviews(){
        return $this->hasMany(Review::class);
    }

    public function scopeTitle(Builder $query, $title): Builder{
        return $query->where("title","LIKE","%". $title ."%");
    }
}
