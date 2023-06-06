<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CollectionName extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];



    /**
     * Get all of the collections for the CollectionName
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function collections(): HasMany
    {
        return $this->hasMany(Collection::class, 'collection_name_id')->with(['masterplan', 'streetscape', 'urbanscape']);
    }
}
