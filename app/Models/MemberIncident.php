<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incident;
use App\Models\Member;
class MemberIncident extends Model
{
    protected $table = 'member_incidents';
    protected $primaryKey = 'id';
    protected $fillable = [
        'incident_id',
        'member_id'
    ];
   
    
    
    
}
