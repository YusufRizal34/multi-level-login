<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<?php if(in_groups('superadmin') || in_groups('admin')) : ?>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    User Management
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin'); ?>">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>User List</span></a>
</li>

<?php endif; ?>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    PROFILE
</div>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user'); ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>My Profile</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('user'); ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Edit Profile</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('logout'); ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Logout</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>