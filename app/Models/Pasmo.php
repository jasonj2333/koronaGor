<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasmo extends Model
{
    protected $table = 'pasma';

    protected $fillable = ['nazwa', 'slug'];

    public function szczyty() : HasMany {
        return $this->HasMany(Szczyt::class);
    }
}
