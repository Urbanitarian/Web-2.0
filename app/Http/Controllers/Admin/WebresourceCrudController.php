<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WebresourceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class WebresourceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WebresourceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Webresource::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/webresource');
        CRUD::setEntityNameStrings('webresource', 'webresources');
    }

     function getFieldsData()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Miniature',
            'type' => 'image',
            'prefix' => 'storage/uploads/webresources/',
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
        $this->getFieldsData();
        $this->crud->addColumn([
            'name'    => 'type',
            'label'   => 'Type',
            'type'    => 'select_from_array',
            'wrapper' => [
                'element' => 'span',
                'class' => function ($crud, $column, $entry, $related_key) {
                            return 'badge badge-dark';
                        }
                    ],
        ]);
        CRUD::column('link');
 CRUD::addField([   // URL
            'name'  => 'Country',
            'label' => 'country',
            'type'  => 'text'
        ]);

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
        CRUD::setValidation(WebresourceRequest::class);
        $this->crud->setValidation([
            'name' => 'required|min:2|max:255',
        ]);
        CRUD::field('name');
        CRUD::field('image');
        $this->crud->addField([   // select_from_array
            'name'        => 'type',
            'label'       => "Tags",
            'type'        => 'select_from_array',
            'options'     => [
                'websites' => 'websites',
                'organisations' => 'organisations',
                'design awards' => 'design awards',
                'case studies' => 'case studies',
                'online magazines' => 'online magazines',
                'investigations' => 'investigations',
                'psd materials' => 'psd materials',
                'resources' => 'resources',
                'platforms' => 'platforms',
                'non-profit' => 'non-profit',
                'international organisations' => 'international organisations',
                'congresses' => 'congresses',
                'national organisations' => 'national organisations',
            ],
            'allows_null' => false,
            'default'     => '1',
            'allows_multiple' => true, // OPTIONAL; needs you to cast this to array in your model;
        ]);
        CRUD::addField([   // URL
            'name'  => 'link',
            'label' => 'Link',
            'type'  => 'url'
        ]);
        CRUD::addField([   
            'name'  => 'country',
            'label' => 'Country',
            'type'  => 'text'
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
        $this->setupCreateOperation();
    }
}
