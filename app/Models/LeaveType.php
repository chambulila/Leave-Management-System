<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    use HasFactory;
    protected $table = "leave_types";
    protected $fillable = [
        'id', 'name', 'uuid', 'created_at', 'updated_at'
    ];

    public function leaveRequest()
    {
        return $this->hasMany(LeaveRequest::class);
    }
}
