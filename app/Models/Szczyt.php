<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Override;

class Szczyt extends Model
{
    protected $table = 'szczyty';

    protected $fillable = ['pasmo_id', 'nazwa', 'slug', 'wysokosc', 'opis'];

    public function pasmo(): BelongsTo
    {
        return $this->belongsTo(Pasmo::class);
    }

    #[Override]
    public function getRouteKeyName() : string
    {
        return 'slug';
    }
}