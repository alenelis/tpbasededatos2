<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Base extends Eloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
