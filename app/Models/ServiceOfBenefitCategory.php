<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ServiceOfBenefitCategory
 * @package App\Models
 * @version June 20, 2022, 6:47 pm UTC
 *
 * @property integer $benefit_category_id
 * @property string $name
 * @property string $display_price
 * @property string $real_price
 * @property string $price
 * @property string $description
 * @property string $image
 * @property integer $publisher_id
 */
class ServiceOfBenefitCategory extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'service_of_benefit_categories';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'benefit_category_id',
        'name',
        'display_price',
        'real_price',
        'price',
        'description',
        'image',
        'publisher_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'benefit_category_id' => 'integer',
        'name' => 'string',
        'display_price' => 'string',
        'real_price' => 'string',
        'price' => 'string',
        'description' => 'string',
        'image' => 'string',
        'publisher_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * Get the benefit_category that owns the ServiceOfBenefitCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function benefit_category(): BelongsTo
    {
        return $this->belongsTo(BenefitCategory::class);
    }
}
