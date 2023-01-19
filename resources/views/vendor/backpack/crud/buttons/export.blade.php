@if ($crud->hasAccess('export'))
<a  href="{{ url($crud->route.'/export') }}">
<button class="btn btn-primary bg-blue-500 text-white"><i class="la la-save"></i> Exporter la liste</button></a>
@endif