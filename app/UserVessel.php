<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVessel extends Model
{
    protected $fillable = [
        'title','description','img', 'ownerId',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'userVessels';
}
