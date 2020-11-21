<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'facebook_ad', 'google_analytics', 'contact_email'
    ];

}
