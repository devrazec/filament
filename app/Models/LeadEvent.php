<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'user_id',
        //'event_type',
        //'details',
        //'event_date',
    ];

    //protected $casts = [
        //'event_date' => 'datetime',
    //];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}