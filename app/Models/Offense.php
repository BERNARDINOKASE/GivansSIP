<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offense extends Model
{
    use HasFactory, HasUlids;

    protected $guard = [];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'name'
    ];

    /**
     * Get all of the report for the Offense
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function report()
    {
        return $this->hasMany(Report::class);
    }
}
