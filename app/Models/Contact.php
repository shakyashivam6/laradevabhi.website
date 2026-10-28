<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'mobile', 'message', 'is_Verified', 'verified_at'];
}
