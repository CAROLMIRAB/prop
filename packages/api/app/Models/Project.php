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
        "price",
        "specs",
        "offer_id",
        "type_id",

    ];

    public function place()
    {
        return $this->hasOne(Place::class);
    }

    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
}
