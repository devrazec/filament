<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadSource extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public $timestamps = false;

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}