<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $fillable = [
        'about_text', 
        'instagram_url', 
        'facebook_url', 
        'address', 
        'email', 
        'phone'
    ];
}
