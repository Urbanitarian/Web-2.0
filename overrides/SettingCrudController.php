<?php

namespace Backpack\Settings\app\Http\Controllers;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class SettingCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
   

    public function setup()
    {
        CRUD::setModel("Backpack\Settings\app\Models\Setting");
        CRUD::setEntityNameStrings(trans('backpack::settings.setting_singular'), trans('backpack::settings.setting_plural'));
        CRUD::setRoute(backpack_url(config('backpack.settings.route')));
    }

    public function setupListOperation()
    {

        // only show settings which are marked as active
        CRUD::addClause('where', 'active', 1);
        // columns to show in the table view
        CRUD::setColumns([
            [
                'name'  => 'description',
                'label' => trans('backpack::settings.description'),
            ],
            [
                'name'  => 'value',
                'label' => trans('backpack::settings.value'),
            ],
            
        ]);
    }

    

    public function setupUpdateOperation()
    {
        CRUD::addField([   // CustomHTML
            'name'  => 'separator',
            'type'  => 'custom_html',
            'value' => '<h3 class="text-base text-red-600 text-danger">Warning: edit this setting will restart the server. Please wait 1 minute after saving.</h3>',
        ],);
        CRUD::addField([
            'name'       => 'key',
            'label'      => 'key',
            'type'       => 'text',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        CRUD::addField([
            'name'       => 'name',
            'label'      => trans('backpack::settings.name'),
            'type'       => 'text',
            'attributes' => [
                'disabled' => 'disabled',
            ],
        ]);

        CRUD::field('name')->on('saving', function () {
            $key = strtoupper(CRUD::getCurrentEntry()->key);
            $value = CRUD::getCurrentEntry()->value;
            $path = base_path('.env');
    
            if (file_exists($path)) {
        
                file_put_contents($path, str_replace(
                    $key . '=' . env($key), $key . '=' . $value, file_get_contents($path)
                ));
            }
        });

        CRUD::addField(json_decode(CRUD::getCurrentEntry()->field, true));
    }


}
