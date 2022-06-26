<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ServiceRequest
 * @package App\Models
 * @version June 20, 2022, 6:58 pm UTC
 *
 * @property integer $user_id
 * @property integer $worker_id
 * @property integer $benefit_category_id
 * @property integer $service_of_benefit_category_id
 * @property string $adress
 * @property string $adress_sup
 * @property string $code_postal
 * @property string $city
 * @property string $town
 * @property string $date
 * @property string $task_description
 * @property string $price_by_hour
 * @property integer $status_id
 * @property string $fix_price
 * @property string $price_after_nego
 */
class ServiceRequest extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'service_requests';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'worker_id',
        'benefit_category_id',
        'service_of_benefit_category_id',
        'adress',
        'adress_sup',
        'code_postal',
        'city',
        'town',
        'date',
        'task_description',
        'price_by_hour',
        'status_id',
        'fix_price',
        'price_after_nego',
        'heure',
        'titre',
        'dure'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'worker_id' => 'integer',
        'benefit_category_id' => 'integer',
        'service_of_benefit_category_id' => 'integer',
        'adress' => 'string',
        'adress_sup' => 'string',
        'code_postal' => 'string',
        'city' => 'string',
        'town' => 'string',
        'date' => 'string',
        'task_description' => 'string',
        'price_by_hour' => 'string',
        'status_id' => 'integer',
        'fix_price' => 'string',
        'price_after_nego' => 'string',
        'heure'=>'string',
        'titre'=>'string',
        'dure'=>'integer'

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


    public function status()
    {
        return $this->belongsTo(Status::class);
    }


}
