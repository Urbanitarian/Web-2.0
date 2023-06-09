<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'master_id',
        'street_id',
        'urban_id',
        'collection_name_id',
        'user_id'
    ];

    protected $table = 'collections';



    /**
     * Get the masterplan that owns the Collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function masterplan(): BelongsTo
    {
        return $this->belongsTo(Masterplan::class, 'master_id');
    }
    public function streetscape(): BelongsTo
    {
        return $this->belongsTo(Streetscape::class, 'street_id');
    }
    public function urbanscape(): BelongsTo
    {
        return $this->belongsTo(Neighbourhood::class, 'urban_id');
    }
}
