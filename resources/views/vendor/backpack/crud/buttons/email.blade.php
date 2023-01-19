@if ($crud->hasAccess('email'))
  <a href="{{ url($crud->route.'/'.$entry->getKey().'/email') }}" class="btn btn-sm btn-link"><i class="la la-envelope"></i> Email</a>
@endif