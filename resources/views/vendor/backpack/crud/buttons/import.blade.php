@if ($crud->hasAccess('import'))
<a  href="{{ url($crud->route.'/import') }}">
<button class="text-white bg-blue-500 btn btn-primary"><i class="la la-file-excel"></i> Import Excel file</button></a>
@endif