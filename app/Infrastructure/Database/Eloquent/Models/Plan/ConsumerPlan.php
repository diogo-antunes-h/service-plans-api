<?php

namespace App\Infrastructure\Database\Eloquent\Models\Plan;

use App\Infrastructure\Database\Eloquent\Models\BaseModel;

class ConsumerPlan extends BaseModel
{
    protected $connection = 'fm_br_mysql';
    protected $table = 'consumer_plans';
}
