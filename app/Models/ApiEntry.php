<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiEntry extends Model
{
    use HasFactory;

    const PUBLIC_ENDPOINT = 'https://api.publicapis.org/entries';

    protected $fillable = [
        'api',
        'description',
        'auth',
        'https',
        'cors',
        'link',
        'category'
    ];
}
