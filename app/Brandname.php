<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brandname extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'brandnames';
    public function portfolios()
    {
        return $this->hasMany(Portfolio::class,'brand_id');
    }
}
