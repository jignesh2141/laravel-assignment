<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The workshops that belong to the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function workshops()
    {
        return $this->hasMany(Workshop::class);
    }
}
