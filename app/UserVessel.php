<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVessel extends Model
{
    protected $fillable = [
        'id','title','description','imagePath', 'ownerId',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'userVessels';
}
