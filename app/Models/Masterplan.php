<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\InteractsWithViews;


class Masterplan extends Model implements Viewable
{
    use CrudTrait;
    use HasFactory;
    use InteractsWithViews;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'masterplans';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    protected $fillable = [
        'image',
        'title',
        'author',
        'city',
        'country',
        'program',
        'year',
        'area',
        'gfa',
        'density',
        'popdensity',
        'homeunit',
        'jobs',
        'streetroad',
        'buildup',
        'nonbuildup',
        'residential',
        'business',
        'commercial',
        'civic',
        'description',
        'credits',
        'location',
        'status',
        'size',
        'tags',
        'link',
        'category',
        'address',
        'active',
    ];

    protected $casts = [
        'tags' => 'array',
    ];
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

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
