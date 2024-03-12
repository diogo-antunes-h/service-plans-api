<?php

namespace App\Infrastructure\Database\Eloquent\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

abstract class BaseAuthenticatableModel extends Authenticatable
{
    use HasApiTokens;
}
