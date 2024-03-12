<?php

namespace App\Infrastructure\Database\Eloquent\Models\ClientPlan;

use App\Infrastructure\Database\Eloquent\Models\BaseModel;

class AdvertiserPlan extends BaseModel
{
    protected $connection = 'fm_br_mysql';
    protected $table = 'ad';
}
