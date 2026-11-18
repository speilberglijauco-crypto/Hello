<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Users extends Model
{
     protected $table = 'user';
    protected $fillable = [
        'username',
        'full_name',
        'password',
        'avatar',
    ];

    public function getAvatarUrlAttribute(): ?string
    {
        if (! $this->avatar) {
            return null;
        }

        return Storage::disk('public')->url('users/'.$this->avatar);
    }

    //const UPDATED_AT = null;
}
