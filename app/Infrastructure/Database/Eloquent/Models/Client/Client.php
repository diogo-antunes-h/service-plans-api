<?php

namespace App\Infrastructure\Database\Eloquent\Models\Client;

use App\Infrastructure\Database\Eloquent\Models\BaseAuthenticatableModel;

class Client extends BaseAuthenticatableModel
{
    protected $table = 'clients';
}
