<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DictionaryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Tag;
/**
 * Class DictionaryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DictionaryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
   // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Dictionary::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/dictionary');
        CRUD::setEntityNameStrings('dictionary', 'dictionaries');
    }

    function getFieldsData()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Miniature',
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
        CRUD::column('name');
        CRUD::column('description');
        CRUD::column('type');
        $this->getFieldsData();
        CRUD::column('tag_id')->label('Tags');
     
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
        CRUD::setValidation(DictionaryRequest::class);
        

        CRUD::field('name');
        CRUD::field('description');
        $this->crud->addField([   // select_from_array
            'name'        => 'type',
            'label'       => "Type",
            'type'        => 'select_from_array',
            'options'     => [
                'Dictionary' => 'Dictionary',
                '2' => '2',
                '3' => '3',
            ],
            'allows_null' => false,
            'default'     => '1',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        CRUD::addField([ // Photo
            'name'      => 'image',
            'key' => 'image_up',
            'label'     => 'Miniature',
            'type'      => 'upload',
            'prefix' => 'storage/',
            'upload'    => true,
            'temporary' => 10,
        ]);
        CRUD::addField([   // SelectMultiple = n-n relationship (with pivot table)
            'label'     => "Tags",
            'type'      => 'select_multiple',
            'name'      => 'tag', // the method that defines the relationship in your Model
            'entity'    => 'tag', // the method that defines the relationship in your Model
        ]);
      

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
        CRUD::field('name');
        CRUD::field('description');
        $this->crud->addField([   // select_from_array
            'name'        => 'type',
            'label'       => "Type",
            'type'        => 'select_from_array',
            'options'     => [
                'Dictionary' => 'Dictionary',
                'Dictionary' => 'Dictionary',
                '3' => '3',
            ],
            'allows_null' => false,
            'default'     => '1',
            // 'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        CRUD::addField([ // Photo
            'name'      => 'image',
            'key' => 'image_up',
            'label'     => 'Miniature',
            'type'      => 'upload',
            'prefix' => 'storage/',
            'upload'    => true,
            'temporary' => 10,
        ]);
        CRUD::addField([   // SelectMultiple = n-n relationship (with pivot table)
            'label'     => "Tags",
            'type'      => 'select_multiple',
            'name'      => 'tag', // the method that defines the relationship in your Model
            'entity'    => 'tag', // the method that defines the relationship in your Model
        ]);
    }
}
