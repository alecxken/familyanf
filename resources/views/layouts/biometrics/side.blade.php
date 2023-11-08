<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="menu-title">
								<span>Admin Menu</span>
							</li>
							<li class="active">
								<a class="{{ (request()->is('homes')) ? 'active noti-dot' : '' }}" href="{{url('home')}}" class=" "><i class="la la-home"></i> <span>Main Dashboard</span></a>
							</li>

							<li class="">
								<a class="{{ (request()->is('workflow\home')) ? 'active noti-dot' : '' }}" href="{{url('workflow\home')}}" class="noti-dot- "><i class="la la-home"></i> <span>Workflow Module</span></a>
							</li>

						    <li class="">
								<a class="{{ (request()->is('biometric\home')) ? 'active noti-dot' : '' }}" href="{{url('biometric\home')}}" class="noti-dot- "><i class="la la-home"></i> <span>Biometric Module</span></a>
							</li>




								<li class="submenu">
								<a href="#" ><i class="fa fa-cogs"></i> <span>General Settings</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">

			  <li><a class="{{ (request()->is('dropdown-settings')) ? 'active' : '' }}" href="{{url('dropdown-settings')}}" class="nav-sub-link">Dropdown Settings</a></li>

@role('Admin')
              <li><a class="{{ (request()->is('create_user')) ? 'active' : '' }}" href="{{url('create_user')}}" class="nav-sub-link">User Management</a></li>

              <li><a class="{{ (request()->is('admin')) ? 'active' : '' }}" href="{{url('admin')}}" class="nav-sub-link">Role Management</a></li>

@endrole


								</ul>
							</li>








						</ul>
					</div>
                </div>
            </div>
