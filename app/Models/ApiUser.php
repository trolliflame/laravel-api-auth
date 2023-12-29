<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Support\Str;

class ApiUser extends Model
{
    use Authenticatable, Authorizable, HasFactory;

    protected $fillable = ['name'];

    protected $hidden = ['api_token'];

    public static function boot(): void
    {
        parent::boot();

        self::creating(static function ($model) {
            $apiToken = Str::random(60);
            $model->api_token = hash('sha256', $apiToken);

            session(['generated_api_token' => $apiToken]);
        });
    }
}
