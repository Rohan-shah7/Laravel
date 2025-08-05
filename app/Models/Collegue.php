<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collegue extends Model
{
    use HasFactory;

    //  Table name (optional, Laravel auto-uses plural form "collegues")
    protected $table = 'collegues';

    //  Allow mass assignment for these fields
    protected $fillable = [
        'name',
        'email',
        'phone',
        'age',
        'gender',
        'address',
        'position',
        'department',
    ];
}
