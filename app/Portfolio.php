<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function brandname()
    {
        return $this->belongsTo('App\Brandname','brand_id');
    }
}
