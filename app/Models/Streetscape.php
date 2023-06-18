<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Streetscape extends Model implements Viewable
{
    use CrudTrait;
    use HasFactory;
    use InteractsWithViews;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'streetscapes';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    protected $fillable = [
        'image',
        'imagea',
        'imageb',
        'title',
        'address',
        'program',
        'author',
        'city',
        'country',
        'link',
        'location',
        'status',
        'size',
        'tags',
        'year',
        'area',
        'description',
        'credits',
        'category',
        'active',
        'masterplan_id'
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function setImageAttribute($value)
    {
        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /**
     * Get the masterpan that owns the Streetscape
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function masterplan(): BelongsTo
    {
        return $this->belongsTo(Masterplan::class, 'masterplan_id', 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
