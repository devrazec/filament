<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'company',
        'source_id',
        'status_id',
        'user_id',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // --- Relationships ---

    // A lead belongs to a source (e.g., Website, Referral)
    public function source()
    {
        return $this->belongsTo(LeadSource::class);
    }

    // A lead has a current status (e.g., New, Qualified)
    public function status()
    {
        return $this->belongsTo(LeadStatus::class);
    }

    // A lead is assigned to a user (agent, sales rep)
    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // A lead can have many notes
    public function notes()
    {
        return $this->hasMany(LeadNote::class);
    }

    // A lead can have many activities (calls, meetings)
    public function activities()
    {
        return $this->hasMany(LeadEvent::class);
    }
}