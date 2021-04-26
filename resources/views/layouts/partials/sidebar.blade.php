<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-shield-alt"></i>
        </div>
        <div class="sidebar-brand-text">XReport</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Reports
    </div>

    <!-- Nav Item - Overdue Tasks -->
    <li class="nav-item {{ (request()->is('reports/overdue-tasks')) ? 'active' : '' }}">
        <a class="nav-link" href="/reports/overdue-tasks">
            <i class="fas fa-exclamation-triangle"></i>
            <span>Overdue Tasks</span></a>
    </li>

    <li class="nav-item {{ (request()->is('reports/report2')) ? 'active' : '' }}">
        <a class="nav-link" href="/reports/report2">
            <i class="fas fa-table"></i>
            <span>Report 2</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
