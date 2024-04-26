<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ url('home') }}"><i class="fas fa-fire">
                    </i> <span>Dashboard</span>
                </a>
            </li>


            <li class="{{ Request::is('users*') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('users.index') }}"><i class="far fa-user">
                    </i> <span>User</span>
                </a>
            </li>

            <li class="{{ Request::is('companies*') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{ route('companies.show', 1) }}"><i class="far fa-user">
                    </i> <span>Company</span>
                </a>
            </li>







        </ul>


    </aside>
</div>
