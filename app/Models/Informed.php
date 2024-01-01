<?php

namespace App\Models;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informed extends Model
{
    protected $table = 'informeds';
    // protected $table = 'response';
    protected $primaryKey = 'id';
    protected $fillable = [
        'report_id',
        'name',
        'designation',
        'departmen'
        ];
        public function members()
        {
            return $this->belongsToMany(Member::class);
        }
        public function informedMembers()
        {
            return $this->belongsToMany(Member::class, 'informed_report', 'member_id', 'report_id');
        }
}

