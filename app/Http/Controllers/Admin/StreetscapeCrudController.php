<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StreetscapeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\City;
use App\Models\Country;
/**
 * Class StreetscapeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class StreetscapeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \App\Http\Controllers\Admin\Operations\ImportOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Streetscape::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/streetscape');
        CRUD::setEntityNameStrings('streetscape', 'streetscapes');
    }

    function getFieldsData()
    {
        $this->crud->addColumn([
            'name' => 'imagea',
            'label' => 'Image',
            'type' => 'image',
            'prefix' => 'storage/uploads/thumbnails/streetscapes/',
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
        CRUD::column('active');
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
        CRUD::setValidation(StreetscapeRequest::class);
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
            'name'  => 'area',
            'label' => 'Area',
            'type'  => 'number',
            'tab'             => 'Main',
            'wrapper' => [ 'class' => 'form-group1 col-sm pl-3'],
        ]);
     
        $this->crud->addField([   // CustomHTML
            'name'  => 'separator0',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Main',
        ]);

        CRUD::addField([ // Text
            'name'  => 'imagea',
            'label' => 'Main image',
            'type'  => 'text',
            'tab'             => 'Main',
        ]);

        CRUD::addField([ // Text
            'name'  => 'imageb',
            'label' => 'Overlay image',
            'type'  => 'text',
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
                'Accessible and connected' => 'Accessible and connected',
                'Age-friendly' => 'Age-friendly',
                'Affordable' => 'Affordable',
                'Biodiverse' => 'Biodiverse',
                'Business District' => 'Business District',
                'By the railway' => 'By the railway',
                'By the water' => 'By the water',
                'Circular' => 'Circular',
                'Car-free' => 'Car-free',
                'Carbon negative' => 'Carbon negative',
                'CBD' => 'CBD',
                'Child-friendly' => 'Child-friendly',
                'Climate adaptation' => 'Climate adaptation',
                'Climate-proof' => 'Climate-proof',
                'Climate-neutral' => 'Climate-neutral',
                'Co-housing' => 'Co-housing',
                'Complete Street' => 'Complete Street',
                'Courtyards' => 'Courtyards',
                'Dense' => 'Dense',
                'DIY Urbanism' => 'DIY Urbanism',
                'Eco-village' => 'Eco-village',
                'Floating City' => 'Floating City',
                'Food-production' => 'Food-production',
                'Green' => 'Green',
                'Green wedges' => 'Green wedges',
                'Garden City' => 'Garden City',
                'Healthy' => 'Healthy',
                'High-rise' => 'High-rise',
                'Hi-Tech' => 'Hi-Tech',
                'Houses in row' => 'Houses in row',
                'Inclusive and Diverse' => 'Inclusive and Diverse',
                'Grow your own food / Local food production' => 'Grow your own food / Local food production',
                'Low-rise' => 'Low-rise',
                'Mixed-use' => 'Mixed-use',
                'Modular' => 'Modular',
                'Missing middle' => 'Missing middle',
                'Nature-rich' => 'Nature-rich',
                'Net zero' => 'Net zero',
                'Outdoor classroom' => 'Outdoor classroom',
                'Place-led' => 'Place-led',
                'Playful' => 'Playful',
                'Preventing Loneliness' => 'Preventing Loneliness',
                'Productive landscape' => 'Productive landscape',
                'Reachable / Accessible' => 'Reachable / Accessible',
                'Regeneration' => 'Regeneration',
                'Resilient landscape' => 'Resilient landscape',
                'Safe' => 'Safe',
                'Science Park' => 'Science Park',
                'Schoolyards' => 'Schoolyards',
                'Self-sufficient' => 'Self-sufficient',
                'Social housing' => 'Social housing',
                'Solar Powered' => 'Solar Powered',
                'SUDS' => 'SUDS',
                'Sustainable' => 'Sustainable',
                'Transformation' => 'Transformation',
                'Timber' => 'Timber',
                'TOD' => 'TOD',
                'WSUD' => 'WSUD',
                'Walkable' => 'Walkable',
                'Youth-friendly' => 'Youth-friendly',
                'Zero carbon' => 'Zero carbon',
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
                'temporary' => 'temporary',
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
                'L'        => 'Large',
                'M'        => 'Medium',
                'S'        => 'Small',
                'XS'        => 'Xs',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'allows_multiple' => false, // OPTIONAL; needs you to cast this to array in your model;
             'tab'             => 'Main',
        ]);

        $this->crud->addField([   // select_from_array
            'name'        => 'active',
            'label'       => "Active",
            'type'        => 'select_from_array',
            'options'     => [
                '0'        => '0',
                '1'        => '1',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'tab'             => 'Main',
        ]);
       

        $this->crud->addField([   // CustomHTML
            'name'  => 'separator0',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Main',
        ]);
        
            CRUD::addField([
                'name'  => 'credits',
                 'label' => 'Credits',
                 'type'  => 'text',
                 'tab' => 'Main',
                 'wrapper' => [ 'class' => 'form-group col-xl pl-3'],
                ]);



        CRUD::addField(['name' => 'address','type' => 'text','label' => 'Address','tab' => 'Location',]);

        CRUD::addField([
            'prefix' => '<a href="../../admin/city/create">+</a>',
            'name' => 'city',
            'type' => 'text',
            'label' => 'City',
             'wrapper' => [ 'class' => 'form-group col-md pl-3'],
             'tab' => 'Location',
            ]);


        CRUD::addField(['prefix' => '<a href="../../admin/country/create">+</a>','name' => 'country', 'type' => 'text', 'label' => 'Country', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],'tab' => 'Location',]);
        CRUD::addField(['prefix' => '<a href="https://www.google.com/maps" target="_blank">Map</a>','name' => 'location', 'type' => 'text', 'label' => 'gps coordinates', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],'tab' => 'Location',]);

        CRUD::field('city')->on('saving', function ($entry) {
            $this->saveCity($entry);
        });

        CRUD::field('country')->on('saving', function ($entry) {
            $this->saveCountry($entry);
        });

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
        CRUD::setValidation(StreetscapeRequest::class);
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
            'name'  => 'area',
            'label' => 'Area',
            'type'  => 'number',
            'tab'             => 'Main',
            'wrapper' => [ 'class' => 'form-group1 col-sm pl-3'],
        ]);
        
        $this->crud->addField([   // CustomHTML
            'name'  => 'separator0',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Main',
        ]);

        CRUD::addField([ // Text
            'name'  => 'imagea',
            'label' => 'Main image',
            'type'  => 'text',
            'tab'             => 'Main',
        ]);

        CRUD::addField([ // Text
            'name'  => 'imageb',
            'label' => 'Overlay image',
            'type'  => 'text',
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
                'Accessible and connected' => 'Accessible and connected',
                'Age-friendly' => 'Age-friendly',
                'Affordable' => 'Affordable',
                'Biodiverse' => 'Biodiverse',
                'Business District' => 'Business District',
                'By the railway' => 'By the railway',
                'By the water' => 'By the water',
                'Circular' => 'Circular',
                'Car-free' => 'Car-free',
                'Carbon negative' => 'Carbon negative',
                'CBD' => 'CBD',
                'Child-friendly' => 'Child-friendly',
                'Climate adaptation' => 'Climate adaptation',
                'Climate-proof' => 'Climate-proof',
                'Climate-neutral' => 'Climate-neutral',
                'Co-housing' => 'Co-housing',
                'Complete Street' => 'Complete Street',
                'Courtyards' => 'Courtyards',
                'Dense' => 'Dense',
                'DIY Urbanism' => 'DIY Urbanism',
                'Eco-village' => 'Eco-village',
                'Floating City' => 'Floating City',
                'Food-production' => 'Food-production',
                'Green' => 'Green',
                'Green wedges' => 'Green wedges',
                'Garden City' => 'Garden City',
                'Healthy' => 'Healthy',
                'High-rise' => 'High-rise',
                'Hi-Tech' => 'Hi-Tech',
                'Houses in row' => 'Houses in row',
                'Inclusive and Diverse' => 'Inclusive and Diverse',
                'Grow your own food / Local food production' => 'Grow your own food / Local food production',
                'Low-rise' => 'Low-rise',
                'Mixed-use' => 'Mixed-use',
                'Modular' => 'Modular',
                'Missing middle' => 'Missing middle',
                'Nature-rich' => 'Nature-rich',
                'Net zero' => 'Net zero',
                'Outdoor classroom' => 'Outdoor classroom',
                'Place-led' => 'Place-led',
                'Playful' => 'Playful',
                'Preventing Loneliness' => 'Preventing Loneliness',
                'Productive landscape' => 'Productive landscape',
                'Reachable / Accessible' => 'Reachable / Accessible',
                'Regeneration' => 'Regeneration',
                'Resilient landscape' => 'Resilient landscape',
                'Safe' => 'Safe',
                'Science Park' => 'Science Park',
                'Schoolyards' => 'Schoolyards',
                'Self-sufficient' => 'Self-sufficient',
                'Social housing' => 'Social housing',
                'Solar Powered' => 'Solar Powered',
                'SUDS' => 'SUDS',
                'Sustainable' => 'Sustainable',
                'Transformation' => 'Transformation',
                'Timber' => 'Timber',
                'TOD' => 'TOD',
                'WSUD' => 'WSUD',
                'Walkable' => 'Walkable',
                'Youth-friendly' => 'Youth-friendly',
                'Zero carbon' => 'Zero carbon',
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
                'L'        => 'Large',
                'M'        => 'Medium',
                'S'        => 'Small',
                'XS'        => 'Xs',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'allows_multiple' => false, // OPTIONAL; needs you to cast this to array in your model;
             'tab'             => 'Main',
        ]);

       
        $this->crud->addField([   // select_from_array
            'name'        => 'active',
            'label'       => "Active",
            'type'        => 'select_from_array',
            'options'     => [
                '0'        => '0',
                '1'        => '1',
            ],
            'wrapper' => [ 'class' => 'form-group col-md pl-3'],
            'allows_null' => false,
            'default'     => '1',
             'tab'             => 'Main',
        ]);

        $this->crud->addField([   // CustomHTML
            'name'  => 'separator0',
            'type'  => 'custom_html',
            'value' => '<hr>',
            'tab' => 'Main',
        ]);

            CRUD::addField([
                'name'  => 'credits',
                 'label' => 'Credits',
                 'type'  => 'text',
                 'tab' => 'Main',
                 'wrapper' => [ 'class' => 'form-group col-xl pl-3'],
                ]);



        CRUD::addField(['name' => 'address','type' => 'text','label' => 'Address','tab' => 'Location',]);

        CRUD::addField([
            'prefix' => '<a href="../../../admin/city/create">+</a>',
            'name' => 'city',
            'type' => 'text',
            'label' => 'City',
             'wrapper' => [ 'class' => 'form-group col-md pl-3'],
             'tab' => 'Location',
            ]);


        CRUD::addField(['prefix' => '<a href="../country/create">+</a>','name' => 'country', 'type' => 'text', 'label' => 'Country', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],'tab' => 'Location',]);
        CRUD::addField(['prefix' => '<a href="https://www.google.com/maps" target="_blank">Map</a>','name' => 'location', 'type' => 'text', 'label' => 'gps coordinates', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],'tab' => 'Location',]);

        CRUD::field('city')->on('saving', function ($entry) {
            $this->saveCity($entry);
        });

        CRUD::field('country')->on('saving', function ($entry) {
            $this->saveCountry($entry);
        });

    }
}
