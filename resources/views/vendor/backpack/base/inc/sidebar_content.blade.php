{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
@include('backpack-database-notifications::sidebarMenuItem')

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>{{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('masterplan') }}"><i class="nav-icon la la-map"></i> Masterplans</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('streetscape') }}"><i class="nav-icon la la-street-view"></i> Streetscapes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('urbanscapes') }}"><i class="nav-icon la la-city"></i> Urbanscapes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('mindscape') }}"><i class="nav-icon la la-brain"></i> Mindscapes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dictionary') }}"><i class="nav-icon la la-atlas"></i> Dictionaries</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('magazine') }}"><i class="nav-icon la la-book"></i> Magazines</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('webresource') }}"><i class="nav-icon la la-globe"></i> Webresources</a></li>
<hr>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('masterplan/import') }}"><i class="nav-icon la la-file-import"></i> Excel Import</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>Files</span></a></li>


<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cog"></i> Settings</a>
    <ul class="nav-dropdown-items">
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i><span>Users</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('team') }}"><i class="nav-icon la la-users"></i> Team</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('pages') }}"><i class="nav-icon la la-file"></i>Pages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('country') }}"><i class="nav-icon la la-atlas"></i> Countries</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('city') }}"><i class="nav-icon la la-map-signs"></i> Cities</a></li>
<li class='nav-item'><a class='nav-link' href="{{ backpack_url('setting') }}"><i class='nav-icon la la-cogs'></i> <span>Advanced settings</span></a></li>
    </ul>
</li>




