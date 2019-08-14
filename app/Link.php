<?php

namespace App;

use App\Helpers\Math;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use TouchesTimestamps;

    protected $fillable = [
        'original_url',
        'code',
        'requested_count',
        'used_count',
        'last_requested',
        'last_used'
    ];

    protected $dates = [
        'last_requested', 'last_used'
    ];
}
