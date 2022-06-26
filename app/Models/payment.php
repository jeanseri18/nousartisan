<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    // use HasFactory;
    public $table = 'payment';
    public $fillable = [
        'worker_id',
        'user_id',
        'amount',
        'request_id',
        'status_worker',
        'status_user',

    ];


}
