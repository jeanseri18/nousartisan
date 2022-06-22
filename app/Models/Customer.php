<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Customer
 * @package App\Models
 * @version June 20, 2022, 9:28 pm UTC
 *
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $phone
 * @property string $adresse_facturation
 * @property string $adress2
 */
class Customer extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'customers';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'firstname',
        'lastname',
        'email',
        'phone',
        'adresse_facturation',
        'adress2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'firstname' => 'string',
        'lastname' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'adresse_facturation' => 'string',
        'adress2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
