<?php

namespace App\Http\Controllers\Admin\Operations;

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

trait ExportOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupExportRoutes($segment, $routeName, $controller)
    {
        Route::get($segment . '/export', [
            'as' => $routeName . '.export',
            'uses' => $controller . '@export',
            'operation' => 'export',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupExportDefaults()
    {
        CRUD::allowAccess('export');

        CRUD::operation('export', function () {
            CRUD::loadDefaultOperationSettingsFromConfig();
        });

        CRUD::operation('list', function () {
            CRUD::addButton('top', 'export', 'view', 'crud::buttons.export');
            // CRUD::addButton('line', 'export', 'view', 'crud::buttons.export');
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
   
    public function export()
    {
        $data = User::all()->toArray();

        $handle = fopen('users.csv', 'w');

        collect($data)->each(fn($row) => fputcsv($handle, $row));

        fclose($handle);

        return response()->download('users.csv');
        return redirect()->back();
    }
}
