<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StreetscapeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Tag;
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
        $this->getFieldsData();
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
        CRUD::setValidation(StreetscapeRequest::class);

        CRUD::field('title');
        CRUD::addField([ // Photo
            'name'      => 'image',
            'key' => 'image_up',
            'label'     => 'Images',
            'type'      => 'upload_multiple',
            'prefix' => 'storage/',
            'upload'    => true,
            'temporary' => 10,
            
            
        ]);
        $this->crud->addField([   // select_from_array
            'name'        => 'tags',
            'label'       => "Tags",
            'type'        => 'select_from_array',
            'options'     => [
                'Child-friendly'        => 'Child-friendly',
                'Playable street'        => 'Playable street',
                'Dynamic street'        => 'Dynamic street',
                'Adaptive space'        => 'Adaptive space',
                'Car free street'        => 'Car free street',
                'Elevated space'        => 'Elevated space',
                'Promenade'        => 'Promenade',
                'Safe street'        => 'Safe street',
                'Shared space'        => 'Shared space',
                'Shared street'        => 'Shared street',
                'Healthy'        => 'Healthy',
                'Safe'        => 'Safe' ,
                'Grow your own food / Local food production'        => 'Grow your own food / Local food production',
                'Inclusive and Diverse'        => 'Inclusive and Diverse' ,
                'Green'        => 'Green',
                'Reachable / Accessible'        => 'Reachable / Accessible', 
                'Aesthetically pleasing / Nice'        => 'Aesthetically pleasing / Nice',
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
                'Placemaking'        => 'Placemaking',
            ],
            'allows_null' => false,
            'default'     => '1',
             'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        CRUD::field('address');
        CRUD::addField(['name' => 'city', 'type' => 'text', 'label' => 'City', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::addField(['name' => 'country', 'type' => 'text', 'label' => 'Country', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::addField(['name' => 'location', 'type' => 'text', 'label' => 'gps coordinates', 'wrapper' => [ 'class' => 'form-group col-md pl-3'],]);
        CRUD::field('creatorlink')->label('Creator link');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
