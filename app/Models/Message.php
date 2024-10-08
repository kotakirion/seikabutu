<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Message extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
     public function chat()
    {
        return $this->belongsTo(Chat::class);
    }
    
    
    

}