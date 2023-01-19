{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
@include('backpack-database-notifications::sidebarMenuItem')

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>{{ trans('backpack::base.dashboard') }}</a></li>


<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon las la-gamepad"></i> Jeux</a>
    <ul class="nav-dropdown-items">
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('games') }}"><i class="nav-icon las la-gamepad"></i></i>Jeux</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('scores') }}"><i class="nav-icon la la-list-ol"></i>Scores</a>
    </ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('concours') }}"><i class="nav-icon la la-trophy"></i> Concours</a>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i><span>Utilisateurs</span></a></li>



<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon las la-shopping-bag "></i> Recharges</a>
    <ul class="nav-dropdown-items">
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('packs') }}"><i class="nav-icon la la-box"></i> Packs</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('paiements') }}"><i class="nav-icon la la-shopping-cart"></i> Paiements</a></li>
    </ul>
</li>


<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon las la-store "></i> Boutique</a>
    <ul class="nav-dropdown-items">
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('cadeaux') }}"><i class="nav-icon la la-gift"></i> Cadeaux</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('commandes') }}"><i class="nav-icon la la-file-invoice"></i> Commandes</a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cog"></i> Parametres</a>
    <ul class="nav-dropdown-items">
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-paypal'></i> <span>Avancé</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>Fichiers</span></a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('pages') }}"><i class="nav-icon la la-file"></i>Pages</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('backup') }}"><i class="nav-icon la la-hdd-o"></i> Sauvegardes</a></li>
    </ul>
</li>