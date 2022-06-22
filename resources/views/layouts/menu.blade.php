<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="side-menus {{ Request::is('customers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('customers.index') }}"><i class="fas fa-building"></i><span>Clients</span></a>
</li>

<li class="side-menus {{ Request::is('workers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('workers.index') }}"><i class="fas fa-building"></i><span>Prestataires</span></a>
</li>

<li class="side-menus {{ Request::is('benefitCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('benefitCategories.index') }}"><i class="fas fa-building"></i><span>Categories de Prestations</span></a>
</li>

<li class="side-menus {{ Request::is('serviceOfBenefitCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('serviceOfBenefitCategories.index') }}"><i class="fas fa-building"></i><span>Services</span></a>
</li>

<li class="side-menus {{ Request::is('serviceRequests*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('serviceRequests.index') }}"><i class="fas fa-building"></i><span>Demande de Prestations</span></a>
</li>

<li class="side-menus {{ Request::is('statuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('statuses.index') }}"><i class="fas fa-building"></i><span>Statuts</span></a>
</li>

<li class="side-menus {{ Request::is('serviceProposals*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('serviceProposals.index') }}"><i class="fas fa-building"></i><span>Proposition de Prestations</span></a>
</li>

<li class="side-menus {{ Request::is('userRoles*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('userRoles.index') }}"><i class="fas fa-building"></i><span>Roles</span></a>
</li>



