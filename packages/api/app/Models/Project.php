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

    /**
     * place
     *
     * relacion con tabla places
     *
     * @return void
     */
    public function place()
    {
        return $this->hasOne(Place::class);
    }

    /**
     * offer
     *
     * relación con tabla offer
     *
     * @return void
     */
    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
}
