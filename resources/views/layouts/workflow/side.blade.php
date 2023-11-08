<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Admin Menu</span>
                </li>
                <li class="">
                    <a href="{{url('home')}}" class=" {{ (request()->is('home')) ? 'active noti-dot' : '' }} "><i class="la la-home"></i> <span>Main Dashboard</span></a>
                </li>

                <li class=" {{ (request()->is('workflow/home')) ? 'active noti-dot' : '' }}">
                    <a href="{{url('workflow\home')}}" class=" {{ (request()->is('workflow/home')) ? 'active noti-dot' : '' }}"><i class="la la-home"></i> <span>Workflow Home</span></a>
                </li>


                @role('Supervisor')
                 <li class="submenu  {{ (request()->is('workflow/process-view')) ? 'active noti-dot' : '' }} {{ (request()->is('workflow/document')) ? 'active noti-dot' : '' }}">
                    <a href="#" ><i class="fa  fa-list-ul"></i> <span>Supervisor  Module </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                       <!--   <li><a href="{{url('workflow/orders-page')}}">Capture New Orders</a></li> -->
                         <li><a class="{{ (request()->is('workflow/process-view')) ? 'active' : '' }} " href="{{url('workflow/process-view')}}">Work Orders View</a></li>
                         <li><a class="{{ (request()->is('workflow/documents')) ? 'active' : '' }} " href="{{url('workflow/documents')}}">Work-Orders Docs</a></li>
                   

                    </ul>
                </li>
                @endrole
                @role('Agents')

                <li class="submenu {{ (request()->is('workflow/agents-job')) ? 'active noti-dot' : '' }}">
                    <a href="#" ><i class="fa  fa-list-ul"></i> <span>Agent  Module</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ (request()->is('workflow/agents-job')) ? 'active' : '' }}" href="{{url('workflow/agents-job')}}">My Assigned Deliveries</a></li>
                       <!--  <li><a href="{{url('#')}}">Complete Deliveries</a></li> -->
                    </ul>
                </li>
                @endrole
                @role('Finance')

                <li class="submenu 
                    {{ (request()->is('workflow/finance-item/*')) ? 'active noti-dot' : ''   }}">
                    <a href="#" ><i class="fa  fa-list-ul"></i> <span>Finance  Module</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ (request()->is('workflow/finance-item/Delivery-Complete')) ? 'active' : '' }}" href="{{url('workflow/finance-item/Delivery-Complete')}}">Completed Deliveries</a></li>
                        <li><a class="{{ (request()->is('workflow/finance-item/Invoice-Generated')) ? 'active' : '' }}" href="{{url('workflow/finance-item/Invoice-Generated')}}">Invoiced Deliveries</a></li>
                        <li><a class="{{ (request()->is('workflow/finance-item/Invoice-Paid')) ? 'active' : '' }}" href="{{url('workflow/finance-item/Invoice-Paid')}}">Paid Deliveries</a></li>

                    </ul>
                </li>

                <li class="submenu  {{ (request()->is('workflow/view-statement')) ? 'active noti-dot' : ''   }} {{ (request()->is('workflow/view-reports')) ? 'active noti-dot' : ''   }}">
                    <a href="#" ><i class="fa  fa-list-ul"></i> <span>Report  Module</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a class="{{ (request()->is('workflow/view-statement')) ? 'active' : '' }}" href="{{url('workflow/view-statement')}}">Order Statement </a></li>
                          <li><a class="{{ (request()->is('workflow/view-reports')) ? 'active' : '' }}" href="{{url('workflow/view-reports')}}">Dynamic Report</a> </li>
                      
                    </ul>
                </li>
                @endrole





                    <li class="submenu {{ (request()->is('create-orderparty')) ? 'active' : ''   }}  {{ (request()->is('create-client')) ? 'active' : ''   }}  {{ (request()->is('get-banks')) ? 'active' : ''   }}">
                    <a href="#" ><i class="fa fa-cogs"></i> <span>General Settings</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                  <li><a class="{{ (request()->is('dropdown-settings')) ? 'active' : '' }}" href="{{url('dropdown-settings')}}" class="nav-sub-link">Dropdown Settings</a></li>                   
                

                 <!--  <li class=""><a class="{{ (request()->is('get-banks')) ? 'active' : '' }}" href="{{url('get-banks')}}" class="nav-sub-link ">Bank Management</a></li> -->   

                   <li ><a class="{{ (request()->is('create-client')) ? 'active' : '' }}" href="{{url('create-client')}}" class="nav-sub-link ">Client Management</a></li>              

                  <li><a class="{{ (request()->is('create-orderparty')) ? 'active' : '' }}" href="{{url('create-orderparty')}}" class="nav-sub-link">Order Party Management</a></li>               
                  @role('Admin')
                  <li><a href="{{url('admin')}}" class="nav-sub-link">Role Management</a></li>
                  @endrole




                    </ul>
                </li>








            </ul>
        </div>
    </div>
</div>
