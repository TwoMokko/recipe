<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Recipes
                    <span class="badge badge-info right">{{ $recipes->total() }}</span>
                </p>
            </a>
        </li>
</nav>
