<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class BenefitCategory
 * @package App\Models
 * @version June 20, 2022, 6:29 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $image
 */
class BenefitCategory extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'benefit_categories';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * Get all of the services_of_benefit_category for the BenefitCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services_of_benefit_category()
    {
        return $this->hasMany(ServiceOfBenefitCategory::class);
    }
}
