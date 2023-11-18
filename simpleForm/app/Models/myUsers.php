<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myUsers extends Model
{
    const CREATED_AT = 'name_of_created_at_column';
    const UPDATED_AT = 'name_of_updated_at_column';
    public $timestamps = false;
    use HasFactory;
    protected $fillable  = [
        'id',
        'name',
        'lastname',
        'pass',
    ];

}
