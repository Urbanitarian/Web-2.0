<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighbourhood extends Model
{
    use CrudTrait;
    use HasFactory;

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
