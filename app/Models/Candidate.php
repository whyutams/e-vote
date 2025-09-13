<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'election_id',
        'user_id',
        'name',
        'vision',
        'mission',
        'photo',
        'added_by',
        'updated_by',
    ];

    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
