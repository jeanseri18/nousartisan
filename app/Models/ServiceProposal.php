<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ServiceProposal
 * @package App\Models
 * @version June 20, 2022, 7:18 pm UTC
 *
 * @property integer $service_request_id
 * @property string $price_of_proposal
 * @property integer $status_id
 * @property string $quotation
 */
class ServiceProposal extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'service_proposals';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'service_request_id',
        'price_of_proposal',
        'status_id',
        'quotation',
        'id_worker'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'service_request_id' => 'integer',
        'price_of_proposal' => 'string',
        'status_id' => 'integer',
        'quotation' => 'string',
        'id_worker'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * Get the status that owns the ServiceProposal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
