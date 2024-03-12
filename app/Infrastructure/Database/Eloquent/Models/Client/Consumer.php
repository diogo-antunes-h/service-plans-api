<?php

namespace App\Infrastructure\Database\Eloquent\Models\Client;

use App\Infrastructure\Database\Eloquent\Models\BaseModel;

class Consumer extends BaseModel
{
    protected $connection = 'fm_br_mysql';
    protected $table = 'consumer';
}
