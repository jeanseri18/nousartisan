<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Worker
 * @package App\Models
 * @version June 20, 2022, 6:04 pm UTC
 *
 * @property string $number_siren
 * @property string $name
 * @property string $number_tva
 * @property string $owner_number
 * @property string $owner_name
 * @property string $email
 * @property string $address_electro
 * @property string $tel
 * @property string $password
 */
class Worker extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'workers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'number_siren',
        'user_id',
        'name',
        'owner_name',
        'number_tva',
        'owner_number',
        'email',
        'tel',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'number_siren' => 'string',
        'name' => 'string',
        'number_tva' => 'string',
        'owner_number' => 'string',
        'owner_name' => 'string',
        'email' => 'string',
        'tel' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number_siren' => 'nullable|string|max:255',
        'name' => 'nullable|string|max:255',
        'number_tva' => 'nullable|string|max:255',
        'owner_number' => 'nullable|string|max:255',
        'owner_name' => 'nullable|string|max:255',
        'email' => 'nullable|string|max:255',
        'tel' => 'nullable|string|max:255',
        'password' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


}
