<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // use HasFactory;
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/TWOQ5dDRiaUV5O0mCZAPDxBEYCqJkN6k0XHg2yO5.png';

        return '/storage/'.$imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function follower()
    {
        return $this->belongsToMany(User::class);
    }
}
