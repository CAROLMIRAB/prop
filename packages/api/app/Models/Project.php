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
        "area",
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
     * relación con tabla offers
     *
     * @return void
     */
    public function offer()
    {
        return $this->hasOne(Offer::class);
    }

    /**
     * types
     *
     * relación con tabla types
     *
     * @return void
     */
    public function type()
    {
        return $this->hasOne(Type::class);
    }
}
