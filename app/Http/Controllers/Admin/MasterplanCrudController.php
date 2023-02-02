<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MasterplanRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\City;
use App\Models\Country;
/**
 * Class MasterplanCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MasterplanCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
   // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \App\Http\Controllers\Admin\Operations\ImportOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Masterplan::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/masterplan');
        CRUD::setEntityNameStrings('masterplan', 'masterplans');
    }

    function getFieldsData()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'image',
            'prefix' => 'storage/',
            'height' => '80px',
            'width' => 'auto',

        ]);
    }
    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title');
        $this->getFieldsData();
        $this->crud->addColumn([
            'name'    => 'tags',
            'label'   => 'Tags',
            'type'    => 'select_from_array',
            'wrapper' => [
                'element' => 'span',
                'class' => function ($crud, $column, $entry, $related_key) {
                            return 'badge badge-dark';
                        }
                    ],
        ]);
        CRUD::column('city');
        CRUD::column('country');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MasterplanRequest::class);
        $this->crud->setValidation([
            'title' => 'required|min:2|max:255',
            'tags' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        CRUD::addField([ // Text
            'name'  => 'title',
            'label' => 'Title',
            'type'  => 'text',
            'tab'             => 'Main',
            'wrapper' => [ 'class' => 'form-group1 col-md pl-3'],
        ]);
        CRUD::addField([ // Text
            'name'  => 'author',
            'label' => 'Author',
            'type'  => 'text',
            'tab'             => 'Main',
            'wrapper' => [ 'class' => 'form-group1 col-sm pl-3'],
        ]);
        CRUD::addField([ // Text
            'name'  => 'program',
            'label' => 'Program',
            'type'  => 'text',
            'tab'             => 'Main',
            'wrapper' => [ 'class' => 'form-group1 col-sm pl-3'],
        ]);

        CRUD::addField([ // Photo
            'name'      => 'image',
            'key' => 'image_up',
            'label'     => 'Images',
            'type'      => 'upload_multiple',
            'prefix' => 'storage/',
            'upload'    => true,
            'temporary' => 10,
            'tab'             => 'Main',
        ]);

        CRUD::addField([
            'name'  => 'description',
            'label' => 'Description',
            'type'  => 'textarea',
            'tab'             => 'Main',
        ]);
      
        $this->crud->addField([   // select_from_array
            'name'        => 'tags',
            'label'       => "Tags",
            'type'        => 'select_from_array',
            'options'     => [
                'Child-friendly'        => 'Child-friendly',
                'Healthy'        => 'Healthy',
                'Safe'        => 'Safe' ,
                'Grow your own food / Local food production'        => 'Grow your own food / Local food production',
                'Inclusive and Diverse'        => 'Inclusive and Diverse' ,
                'Green'        => 'Green',
                'Reachable / Accessible'        => 'Reachable / Accessible', 
                'Affordable'        => 'Affordable' ,
                'Self-sufficient'        => 'Self-sufficient',
                'Car-free'        => 'Car-free',
                'Walkable'        => 'Walkable',
                'Preventing Loneliness'        => 'Preventing Loneliness',
                'Youth-friendly'        => 'Youth-friendly' ,
                'Age-friendly'        => 'Age-friendly',
                'Accessible and connected'        => 'Accessible and connected',
                'Climate-proof'        => 'Climate-proof' ,
                'Sustainable'        => 'Sustainable', 
                'Playful'        => 'Playful',
                'Circular'        => 'Circular',
                'Climate-neutral'        => 'Climate-neutral',
                'Zero carbon'        => 'Zero carbon' ,
                'Carbon negative'        => 'Carbon negative',
                'WSUD'        => 'WSUD', 
                'Place-led'        => 'Place-led',
                'Co-housing'        => 'Co-housing',
                'Timber'        => 'Timber',
                'Social housing'        => 'Social housing',
                'Biodiverse'        => 'Biodiverse',
                'Low-rise'        => 'Low-rise',
                'High-rise'        => 'High-rise',
                'Dense'        => 'Dense',
                'Mixed-use'        => 'Mixed-use',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
             'tab'             => 'Main',
        ]);

        $this->crud->addField([   // select_from_array
            'name' => 'status',
            'label' => "Status",
            'type' => 'select_from_array',
            'options' => [
                'built' => 'built',
                'future' => 'future',
                'under development' => 'under development',
                'regeneration' => 'regeneration',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'allows_multiple' => false, // OPTIONAL; needs you to cast this to array in your model;
             'tab'             => 'Main',
        ]);

        $this->crud->addField([   // select_from_array
            'name'        => 'size',
            'label'       => "Size",
            'type'        => 'select_from_array',
            'options'     => [
                'Large'        => 'Large',
                'Medium'        => 'Medium',
                'Small'        => 'Small',
                'Xs'        => 'Xs',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'allows_multiple' => false, // OPTIONAL; needs you to cast this to array in your model;
             'tab'             => 'Main',
        ]);

        $this->crud->addField([   // CustomHTML
            'name'  => 'separator0',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Main',
        ]);
        CRUD::addField([
            'name'  => 'link',
             'label' => 'Link',
             'type'  => 'url',
             'tab' => 'Main',
             'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            ]);
            CRUD::addField([
                'name'  => 'credits',
                 'label' => 'Credits',
                 'type'  => 'text',
                 'tab' => 'Main',
                 'wrapper' => [ 'class' => 'form-group col-md pl-3'],
                ]);



        CRUD::addField(['prefix' => '<i class="las la-map"></i>','name' => 'address','type' => 'text','label' => 'Address','tab' => 'Location',]);
        CRUD::addField([
             'prefix' => '<a href="../../admin/city/create">+</a>',
             'name' => 'city',
             'type' => 'text',
             'label' => 'City', 
             'wrapper' => [ 'class' => 'form-group col-md pl-3'],
             'tab' => 'Location',
            ]);

            
            CRUD::field('city')->on('saving', function ($entry) {
                $this->saveCity($entry);
            });
            
        CRUD::addField([ 
            'prefix' => '<a href="../../admin/country/create">+</a>',
            'name' => 'country',
             'type' => 'text',
              'label' => 'Country',
               'wrapper' => [ 'class' => 'form-group col-md pl-3'],
               'tab' => 'Location',
        ]);
        
            CRUD::field('country')->on('saving', function ($entry) {
                $this->saveCountry($entry);
            });

        
        CRUD::addField([
            'prefix' => '<a href="https://www.google.com/maps" target="_blank">Map</a>',
            'name' => 'location',
             'type' => 'text',
              'label' => 'gps coordinates',
               'wrapper' => [ 'class' => 'form-group col-md pl-3'],
               'tab' => 'Location',
            ]);


        $this->crud->addField([
            'name' => 'year', 'type' => 'number',
            'label' => 'Year',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'area', 'type' => 'number',
            'label' => 'Area (sqm)',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'gfa', 'type' => 'number',
            'label' => 'Gfa (sqm)',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'density', 'type' => 'number',
            'label' => 'Density (far)',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);

        $this->crud->addField([
            'name' => 'popdensity', 'type' => 'number',
            'label' => 'Pop density (inh/ha)',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);

        $this->crud->addField([   // CustomHTML
            'name'  => 'separator',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Details',
        ]);

        $this->crud->addField([
            'name' => 'homeunit', 'type' => 'number',
            'label' => 'Home units',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'jobs', 'type' => 'number',
            'label' => 'Jobs',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'streetroad', 'type' => 'number',
            'label' => 'Streetroad %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'buildup', 'type' => 'number',
            'label' => 'Buildup %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);

        $this->crud->addField([
            'name' => 'nonbuildup', 'type' => 'number',
            'label' => 'Non buildup %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);

        $this->crud->addField([   // CustomHTML
            'name'  => 'separator2',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Details',
        ]);

        $this->crud->addField([
            'name' => 'residential', 'type' => 'number',
            'label' => 'Residential %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'business', 'type' => 'number',
            'label' => 'Business %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'commercial', 'type' => 'number',
            'label' => 'Commercial %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'civic', 'type' => 'number',
            'label' => 'Civic %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);






        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    public function saveCountry($entry)
    {
        Country::firstOrCreate(['name' => $entry->country]);
    }

    public function saveCity($entry)
    {
        City::firstOrCreate(['name' => $entry->city]);
    }
    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        CRUD::setValidation(MasterplanRequest::class);
        $this->crud->setValidation([
            'title' => 'required|min:2|max:255',
            'tags' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
        CRUD::addField([ // Text
            'name'  => 'title',
            'label' => 'Title',
            'type'  => 'text',
            'tab'             => 'Main',
            'wrapper' => [ 'class' => 'form-group1 col-md pl-3'],
        ]);
        CRUD::addField([ // Text
            'name'  => 'author',
            'label' => 'Author',
            'type'  => 'text',
            'tab'             => 'Main',
            'wrapper' => [ 'class' => 'form-group1 col-sm pl-3'],
        ]);
        CRUD::addField([ // Text
            'name'  => 'program',
            'label' => 'Program',
            'type'  => 'text',
            'tab'             => 'Main',
            'wrapper' => [ 'class' => 'form-group1 col-sm pl-3'],
        ]);

        CRUD::addField([ // Photo
            'name'      => 'image',
            'key' => 'image_up',
            'label'     => 'Images',
            'type'      => 'upload_multiple',
            'prefix' => 'storage/',
            'upload'    => true,
            'temporary' => 10,
            'tab'             => 'Main',
        ]);

        CRUD::addField([
            'name'  => 'description',
            'label' => 'Description',
            'type'  => 'textarea',
            'tab'             => 'Main',
        ]);
      
        $this->crud->addField([   // select_from_array
            'name'        => 'tags',
            'label'       => "Tags",
            'type'        => 'select_from_array',
            'options'     => [
                'Child-friendly'        => 'Child-friendly',
                'Healthy'        => 'Healthy',
                'Safe'        => 'Safe' ,
                'Grow your own food / Local food production'        => 'Grow your own food / Local food production',
                'Inclusive and Diverse'        => 'Inclusive and Diverse' ,
                'Green'        => 'Green',
                'Reachable / Accessible'        => 'Reachable / Accessible', 
                'Affordable'        => 'Affordable' ,
                'Self-sufficient'        => 'Self-sufficient',
                'Car-free'        => 'Car-free',
                'Walkable'        => 'Walkable',
                'Preventing Loneliness'        => 'Preventing Loneliness',
                'Youth-friendly'        => 'Youth-friendly' ,
                'Age-friendly'        => 'Age-friendly',
                'Accessible and connected'        => 'Accessible and connected',
                'Climate-proof'        => 'Climate-proof' ,
                'Sustainable'        => 'Sustainable', 
                'Playful'        => 'Playful',
                'Circular'        => 'Circular',
                'Climate-neutral'        => 'Climate-neutral',
                'Zero carbon'        => 'Zero carbon' ,
                'Carbon negative'        => 'Carbon negative',
                'WSUD'        => 'WSUD', 
                'Place-led'        => 'Place-led',
                'Co-housing'        => 'Co-housing',
                'Timber'        => 'Timber',
                'Social housing'        => 'Social housing',
                'Biodiverse'        => 'Biodiverse',
                'Low-rise'        => 'Low-rise',
                'High-rise'        => 'High-rise',
                'Dense'        => 'Dense',
                'Mixed-use'        => 'Mixed-use',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
             'tab'             => 'Main',
        ]);

        $this->crud->addField([   // select_from_array
            'name' => 'status',
            'label' => "Status",
            'type' => 'select_from_array',
            'options' => [
                'built' => 'built',
                'future' => 'future',
                'under development' => 'under development',
                'regeneration' => 'regeneration',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'allows_multiple' => false, // OPTIONAL; needs you to cast this to array in your model;
             'tab'             => 'Main',
        ]);

        $this->crud->addField([   // select_from_array
            'name'        => 'size',
            'label'       => "Size",
            'type'        => 'select_from_array',
            'options'     => [
                'Large'        => 'Large',
                'Medium'        => 'Medium',
                'Small'        => 'Small',
                'Xs'        => 'Xs',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'allows_multiple' => false, // OPTIONAL; needs you to cast this to array in your model;
             'tab'             => 'Main',
        ]);

        $this->crud->addField([   // CustomHTML
            'name'  => 'separator0',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Main',
        ]);
        CRUD::addField([
            'name'  => 'link',
             'label' => 'Link',
             'type'  => 'url',
             'tab' => 'Main',
             'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            ]);
            CRUD::addField([
                'name'  => 'credits',
                 'label' => 'Credits',
                 'type'  => 'text',
                 'tab' => 'Main',
                 'wrapper' => [ 'class' => 'form-group col-md pl-3'],
                ]);



        CRUD::addField(['prefix' => '<i class="las la-map"></i>','name' => 'address','type' => 'text','label' => 'Address','tab' => 'Location',]);
        CRUD::addField([
             'prefix' => '<a href="../../../admin/city/create">+</a>',
             'name' => 'city',
             'type' => 'text',
             'label' => 'City', 
             'wrapper' => [ 'class' => 'form-group col-md pl-3'],
             'tab' => 'Location',
            ]);

            
            CRUD::field('city')->on('saving', function ($entry) {
                $this->saveCity($entry);
            });
            
        CRUD::addField([ 
            'prefix' => '<a href="../../../admin/country/create">+</a>',
            'name' => 'country',
             'type' => 'text',
              'label' => 'Country',
               'wrapper' => [ 'class' => 'form-group col-md pl-3'],
               'tab' => 'Location',
        ]);
        
            CRUD::field('country')->on('saving', function ($entry) {
                $this->saveCountry($entry);
            });

        
        CRUD::addField([
            'prefix' => '<a href="https://www.google.com/maps" target="_blank">Map</a>',
            'name' => 'location',
             'type' => 'text',
              'label' => 'gps coordinates',
               'wrapper' => [ 'class' => 'form-group col-md pl-3'],
               'tab' => 'Location',
            ]);


        $this->crud->addField([
            'name' => 'year', 'type' => 'number',
            'label' => 'Year',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'area', 'type' => 'number',
            'label' => 'Area (sqm)',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'gfa', 'type' => 'number',
            'label' => 'Gfa (sqm)',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'density', 'type' => 'number',
            'label' => 'Density (far)',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);

        $this->crud->addField([
            'name' => 'popdensity', 'type' => 'number',
            'label' => 'Pop density (inh/ha)',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);

        $this->crud->addField([   // CustomHTML
            'name'  => 'separator',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Details',
        ]);

        $this->crud->addField([
            'name' => 'homeunit', 'type' => 'number',
            'label' => 'Home units',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'jobs', 'type' => 'number',
            'label' => 'Jobs',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'streetroad', 'type' => 'number',
            'label' => 'Streetroad %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'buildup', 'type' => 'number',
            'label' => 'Buildup %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);

        $this->crud->addField([
            'name' => 'nonbuildup', 'type' => 'number',
            'label' => 'Non buildup %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);

        $this->crud->addField([   // CustomHTML
            'name'  => 'separator2',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Details',
        ]);

        $this->crud->addField([
            'name' => 'residential', 'type' => 'number',
            'label' => 'Residential %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'business', 'type' => 'number',
            'label' => 'Business %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'commercial', 'type' => 'number',
            'label' => 'Commercial %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);
        $this->crud->addField([
            'name' => 'civic', 'type' => 'number',
            'label' => 'Civic %',
            'tab' => 'Details',
            'wrapper' => [ 'class' => 'group1 col-md pl-3'],
            
        ]);

    }
}
