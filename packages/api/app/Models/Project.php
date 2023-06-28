<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    public $timestamps = true;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        "name",
        "description",
        "image",
        "address",
        "price",
        "specs",
        "offer_id",
        "type_id",
        "place_id"
    ];
}
