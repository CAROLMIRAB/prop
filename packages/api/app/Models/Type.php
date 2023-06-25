<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';

    public $timestamps = false;

    /**
     * @var array $fillable
     */
    protected $fillable = [
        "name",
    ];
}
