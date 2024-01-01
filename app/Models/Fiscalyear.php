<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiscalyear extends Model
{
    public $table = 'fiscal_year';
    public $primaryKey = 'id';
    public $fillable = [
        'fiscal_year',
        'status'
    ];
}
