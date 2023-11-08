<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Admin Menu</span>
                </li>
                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="{{ url('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}"><i
                            class="la la-dashboard text-success"></i>
                        <span>Main Dashboard</span></a>
                </li>

              <!-- Bank Module -->

  <li class="submenu">
    <a href="#"><i class="fa  fa-list-ul"></i> <span>Family Module</span> <span
            class="menu-arrow"></span></a>
    <ul style="display: none;">

        <li><a class="{{ request()->is('partners') ? 'active' : '' }}"
                href="{{ url('partners') }}">New Member</a></li>


    </ul>
</li>
<li class="submenu">
    <a href="#"><i class="fa  fa-list-ul"></i> <span>Tribute Module</span> <span
            class="menu-arrow"></span></a>
    <ul style="display: none;">

        <li><a class="{{ request()->is('person') ? 'active' : '' }}"
                href="{{ url('person') }}">Add Deceased </a></li>
        <li><a class="{{ request()->is('view-tributes') ? 'active' : '' }}"
                    href="{{ url('view-tributes') }}">View Tributes </a></li>

    </ul>
</li>
@role('Admin')
                <li class="submenu">
                    <a href="#"><i class="fa fa-cogs"></i> <span>General Settings</span> <span
                            class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li><a class="{{ request()->is('dropdown-settings') ? 'active' : '' }}"
                                href="{{ url('dropdown-settings') }}" class="nav-sub-link">Dropdown Settings</a></li>


                            <li><a class="{{ request()->is('create_user') ? 'active' : '' }}"
                                    href="{{ url('create_user') }}" class="nav-sub-link">User Management</a></li>

                            <li><a class="{{ request()->is('admin') ? 'active' : '' }}" href="{{ url('admin') }}"
                                    class="nav-sub-link">Role Management</a></li>


                    </ul>
                </li>
                @endrole







            </ul>
        </div>
    </div>
</div>
