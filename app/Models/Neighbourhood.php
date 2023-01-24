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
      ];

    protected $casts = [
        'image' => 'array',
        'tags' => 'array',
    ];
   /*
   |--------------------------------------------------------------------------
   | FUNCTIONS
   |--------------------------------------------------------------------------
   */
   public function setImageAttribute($value)
   {
   
       $attribute_name = "image";
       $disk = "public";
       $destination_path = "/uploads/streetscapes";

       $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
  

   // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
   }
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
