<?php

namespace App\Http\Controllers\Admin\Operations;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Exception;
use Validator;
use Alert;

trait EmailOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupEmailRoutes($segment, $routeName, $controller)
    {
        Route::get($segment . '/{id}/email', [
            'as'        => $routeName . '.email',
            'uses'      => $controller . '@email',
            'operation' => 'email',
        ]);

        Route::post($segment . '/{id}/email', [
            'as'        => $routeName . '.email-send',
            'uses'      => $controller . '@postEmailForm',
            'operation' => 'email',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupEmailDefaults()
    {
        $this->crud->allowAccess('email');

        $this->crud->operation('email', function () {
            $this->crud->loadDefaultOperationSettingsFromConfig();
        });

        $this->crud->operation('list', function () {
            // $this->crud->addButton('top', 'email', 'view', 'crud::buttons.email');
            $this->crud->addButton('line', 'email', 'view', 'crud::buttons.email');
        });
    }

    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
    public function email()
    {
        $this->crud->hasAccessOrFail('email');

        // prepare the fields you need to show
        $this->data['crud'] = $this->crud;
        $this->data['title'] = $this->crud->getTitle() ?? 'email ' . $this->crud->entity_name;
        $this->data['entry'] = $this->crud->getCurrentEntry();
        // load the view
        return view("crud::operations.email_form", $this->data);
    }

    public function postEmailForm(Request $request)
    {
        // run validation
        $validator = Validator::make($request->all(), [
            'from' => 'required|email',
            'reply_to' => 'nullable|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        if ($validator->fails())
            return redirect()->back()->withErrors($validator)->withInput();
        $entry = $this->crud->getCurrentEntry();
        try {
            // send the actual email
            Mail::raw($request['message'], function ($message) use ($entry, $request) {
                $message->from($request->from);
                $message->to($entry->email, $entry->name);
                $message->subject($request['subject']);
            });

            Alert::success('Mail Sent')->flash();

            return redirect(url($this->crud->route));
        } catch (Exception $e) {
            // show a bubble with the error message
            Alert::error("Error, " . $e->getMessage())->flash();

            return redirect()->back()->withInput();
        }
    }
}