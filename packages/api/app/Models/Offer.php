<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $table = 'offers';

    public $timestamps = true;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        "offer",
        "description"
    ];
}
