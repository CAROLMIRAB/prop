<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';

    public $timestamps = true;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        "lat",
        "long",
        "region",
        "provincia",
        "comuna",
        "route",
        "number",
        "route",
        "placeid"
    ];
}
