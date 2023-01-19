<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Mail\AboMail;
use Illuminate\Support\Facades\Mail;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UserCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \App\Http\Controllers\Admin\Operations\EmailOperation;
    
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('utilisateur', 'utilisateurs');
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
        CRUD::column('email');
        CRUD::column('role')->type('select_from_array')->options([
            'admin' => 'Administrateur',
            'user' => 'Utilisateur',
        ]);
        $this->crud->enableExportButtons();
       

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
        $this->crud->setValidation([
            'name' => 'required|min:2',
            'email' => 'required',
        ]);
        CRUD::field('name');
        CRUD::field('email');
        CRUD::field('password');
        $this->crud->addField([   // select_from_array
            'name'        => 'role',
            'label'       => "role",
            'type'        => 'select_from_array',
            'options'     => [
                'admin' => 'administrateur',
                'user' => 'utilisateur',
            ]]);
                CRUD::field('email')->on('saving', function ($entry) {
                    $mailcontent = array(
                        'email' => env('MAIL_USERNAME'),
                        'message' => "Votre Compte à été crée avec succés",
                    );
                    Mail::to($entry)->queue(new AboMail($mailcontent));
                });
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
        $this->crud->setValidation([
            'name' => 'required|min:2',
            'email' => 'required',
        ]);
        CRUD::field('name');
        CRUD::field('email');
        $this->crud->addField([   // select_from_array
            'name'        => 'role',
            'label'       => "role",
            'type'        => 'select_from_array',
            'options'     => [
                'admin' => 'administrateur',
                'user' => 'utilisateur',
            ]]);
    }
}
