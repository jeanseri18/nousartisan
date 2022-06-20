<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Status
 * @package App\Models
 * @version June 20, 2022, 7:11 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $color_code
 * @property string $role
 */
class Status extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'statuses';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'color_code',
        'role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'color_code' => 'string',
        'role' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
