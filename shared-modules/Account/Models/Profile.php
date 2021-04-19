<?php

namespace Account\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Profile
{
    /*
     * Relationships
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
