<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MemberIncident;

class Member extends Model
{
    public $table = 'members';
    public $primaryKey = 'id';
    public $fillable = [
        'members_code',
        'members_name',
        'members_designation',
        'members_unit',
        'findings',
        'action_taken'
    ];
    
}





