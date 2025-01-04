<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attender extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    protected $connection = 'mysql';
    
    protected $fillable = [
        'name',
        'last_name',
        'last_second_name',
        'voice',
    ];
}
