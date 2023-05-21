<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighbourhood extends Model implements Viewable
{
    use CrudTrait;
    use HasFactory;
    use InteractsWithViews;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'neighbourhoods';
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
        'project_title',
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
        'descriptiona',
        'imagea',
        'descriptionb',
        'imageb',
        'descriptionc',
        'imagec',
        'descriptiond',
        'imaged',
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
