<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $table = 'Incidents';
    // protected $table = 'response';
    protected $primaryKey = 'id';
    protected $fillable = [
        'incident_report_no',
        'type',
        'location',
        'incident_date_detected',
        'incident_date_reported',
        'description',
        'initial_response',
        'incidence_reported_by_name',
        'incidence_reported_by_department',
        'incidence_reported_from_contact',
        'incidence_reported_from_email',
        'impact',
        'finding',
        'action',
        'status',
        'highest_index',
        'fiscal_year_id'
    ];

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
    public function inform()
    {
        return $this->belongsToMany(Member::class, 'incident_informed', 'incident_id', 'member_id');
    }
    public function response()
    {
        return $this->belongsToMany(Member::class, 'incident_response', 'incident_id', 'member_id');
    }
}
