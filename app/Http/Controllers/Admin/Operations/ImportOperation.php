<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

trait ImportOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupImportRoutes($segment, $routeName, $controller)
    {
        Route::get($segment . '/import', [
            'as' => $routeName . '.import',
            'uses' => $controller . '@import',
            'operation' => 'import',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupImportDefaults()
    {
        CRUD::allowAccess('import');

        CRUD::operation('import', function () {
            CRUD::loadDefaultOperationSettingsFromConfig();
        });

        CRUD::operation('list', function () {
            CRUD::addButton('top', 'import', 'view', 'crud::buttons.import');
            // CRUD::addButton('line', 'Import', 'view', 'crud::buttons.Import');
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
   
    public function Import()
    {
        CRUD::hasAccessOrFail('import');

        // prepare the fields you need to show
        $this->data['crud'] = $this->crud;
   

        // load the view
        return view('crud::operations.import_form', $this->data);
    }
}
