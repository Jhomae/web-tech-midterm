<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RiceInfoInPhil
 * @package App\Models
 * @version October 25, 2021, 9:07 am UTC
 *
 * @property string $name_of_the_rice
 * @property string $variety
 * @property number $price
 * @property string $most_planted_region
 */
class RiceInfoInPhil extends Model
{

    use HasFactory;

    public $table = 'rice_of_the_phil_info';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_of_the_rice',
        'variety',
        'price',
        'most_planted_region'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name_of_the_rice' => 'string',
        'variety' => 'string',
        'price' => 'decimal:2',
        'most_planted_region' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_of_the_rice' => 'required|string|max:255',
        'variety' => 'required|string|max:255',
        'price' => 'required|numeric',
        'most_planted_region' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
