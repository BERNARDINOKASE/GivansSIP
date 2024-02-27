<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory, HasUlids;

    protected $guard = [];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'date_report',
        'location_of_incident',
        'chronology',
        'evidence',
        'solutions',
        'notes',
        'status'
    ];

    /**
     * Get the user that owns the Report
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the offense that owns the Report
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function offense()
    {
        return $this->belongsTo(Offense::class);
    }
}
