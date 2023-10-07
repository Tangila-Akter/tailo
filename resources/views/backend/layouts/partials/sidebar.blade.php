 <!-- sidebar menu area start -->
 @php
     $usr = Auth::guard('admin')->user();
 @endphp
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <h2 class="text-white">Admin</h2> 
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    @if ($usr->can('dashboard.view'))
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('order.create') || $usr->can('order.view') ||  $usr->can('order.edit') ||  $usr->can('order.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Order
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.order.create') || Route::is('admin.order.index') || Route::is('admin.order.edit') || Route::is('admin.order.show') ? 'in' : '' }}">
                            @if ($usr->can('order.view'))
                                <li class="{{ Route::is('admin.order.index')  || Route::is('admin.order.edit') ? 'active' : '' }}"><a href="{{ route('admin.order.index') }}">Order</a></li>
                            @endif
                            @if ($usr->can('order.create'))
                                <li class="{{ Route::is('admin.order.create')  ? 'active' : '' }}"><a href="{{ route('admin.order.create') }}">Create Order</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif


                    @if ($usr->can('account.create') || $usr->can('account.view') ||  $usr->can('account.edit') ||  $usr->can('account.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Account
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.account.create') || Route::is('admin.account.index') || Route::is('admin.account.edit') || Route::is('admin.account.show') ? 'in' : '' }}">
                            @if ($usr->can('account.view'))
                                <li class="{{ Route::is('admin.account.index')  || Route::is('admin.account.edit') ? 'active' : '' }}"><a href="{{ route('admin.account.index') }}">Account</a></li>
                            @endif
                            @if ($usr->can('account.create'))
                                <li class="{{ Route::is('admin.account.create')  ? 'active' : '' }}"><a href="{{ route('admin.account.create') }}">Create Account</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    
                    @if ($usr->can('sms.create') || $usr->can('sms.view') ||  $usr->can('sms.edit') ||  $usr->can('sms.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            SMS
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.sms.create') || Route::is('admin.sms.index') || Route::is('admin.sms.edit') || Route::is('admin.sms.show') ? 'in' : '' }}">
                            @if ($usr->can('sms.view'))
                                <li class="{{ Route::is('admin.sms.index')  || Route::is('admin.sms.edit') ? 'active' : '' }}"><a href="{{ route('admin.sms.index') }}">SMS</a></li>
                            @endif
                            @if ($usr->can('sms.create'))
                                <li class="{{ Route::is('admin.sms.multi')  ? 'active' : '' }}"><a href="{{ route('admin.sms.multi') }}">Mutiple SMS</a></li>
                            @endif
                            @if ($usr->can('sms.create'))
                                <li class="{{ Route::is('admin.sms.create')  ? 'active' : '' }}"><a href="{{ route('admin.sms.create') }}">Single SMS</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('stuff.create') || $usr->can('stuff.view') ||  $usr->can('stuff.edit') ||  $usr->can('stuff.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Stuff
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.stuff.create') || Route::is('admin.stuff.index') || Route::is('admin.stuff.edit') || Route::is('admin.stuff.show') ? 'in' : '' }}">
                            @if ($usr->can('stuff.view'))
                                <li class="{{ Route::is('admin.stuff.index')  || Route::is('admin.stuff.edit') ? 'active' : '' }}"><a href="{{ route('admin.stuff.index') }}">Stuff</a></li>
                            @endif
                            @if ($usr->can('stuff.create'))
                                <li class="{{ Route::is('admin.stuff.create')  ? 'active' : '' }}"><a href="{{ route('admin.stuff.create') }}">Create Stuff</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                   


                    @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Roles & Permissions
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.roles.create') || Route::is('admin.roles.index') || Route::is('admin.roles.edit') || Route::is('admin.roles.show') ? 'in' : '' }}">
                            @if ($usr->can('role.view'))
                                <li class="{{ Route::is('admin.roles.index')  || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">All Roles</a></li>
                            @endif
                            @if ($usr->can('role.create'))
                                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    

                    
                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Admins
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('admin.admins.index') || Route::is('admin.admins.edit') || Route::is('admin.admins.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('admin.view'))
                                <li class="{{ Route::is('admin.admins.index')  || Route::is('admin.admins.edit') ? 'active' : '' }}"><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                            @endif

                            @if ($usr->can('admin.create'))
                                <li class="{{ Route::is('admin.admins.create')  ? 'active' : '' }}"><a href="{{ route('admin.admins.create') }}">Create Admin</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('client.create') || $usr->can('client.view') ||  $usr->can('client.edit') ||  $usr->can('client.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            client
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('admin.admins.index') || Route::is('admin.admins.edit') || Route::is('admin.admins.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('admin.view'))
                                <li class="{{ Route::is('admin.admins.index')  || Route::is('admin.admins.edit') ? 'active' : '' }}"><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                            @endif

                            @if ($usr->can('admin.create'))
                                <li class="{{ Route::is('admin.admins.create')  ? 'active' : '' }}"><a href="{{ route('admin.admins.create') }}">Create Admin</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    @if ($usr->can('setting.create') || $usr->can('setting.view') ||  $usr->can('setting.edit') ||  $usr->can('setting.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Setting
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.roles.create') || Route::is('admin.roles.index') || Route::is('admin.roles.edit') || Route::is('admin.roles.show') ? 'in' : '' }}">
                            @endif
                            @if ($usr->can('upper_pocket.create') || $usr->can('upper_pocket.view') ||  $usr->can('upper_pocket.edit') ||  $usr->can('upper_pocket.delete'))
                                    <li>
                                        <a href="javascript:void(0)" aria-expanded="true"><span>
                                            Upper Pockets
                                        </span></a>
                                        <ul class="collapse {{ Route::is('admin.upper-pocket.create') || Route::is('admin.upper-pocket.index') || Route::is('admin.upper-pocket.edit') || Route::is('admin.upper-pocket.show') ? 'in' : '' }}">
                                            @if ($usr->can('upper_pocket.view'))
                                                <li class="{{ Route::is('admin.upper-pocket.index')  || Route::is('admin.upper-pocket.edit') ? 'active' : '' }}"><a href="{{ route('admin.upper-pocket.index') }}">All Upper Pockets</a></li>
                                            @endif
                                            @if ($usr->can('upper_pocket.create'))
                                                <li class="{{ Route::is('admin.upper-pocket.create')  ? 'active' : '' }}"><a href="{{ route('admin.upper-pocket.create') }}">Create Upper Pockets</a></li>
                                            @endif
                                        </ul>
                                    </li>
                                    @endif
                            @if ($usr->can('collar.create') || $usr->can('collar.view') ||  $usr->can('collar.edit') ||  $usr->can('collar.delete'))
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>
                                    Collar
                                </span></a>
                                <ul class="collapse {{ Route::is('admin.collar.create') || Route::is('admin.collar.index') || Route::is('admin.collar.edit') || Route::is('admin.collar.show') ? 'in' : '' }}">
                                    @if ($usr->can('collar.view'))
                                        <li class="{{ Route::is('admin.collar.index')  || Route::is('admin.collar.edit') ? 'active' : '' }}"><a href="{{ route('admin.collar.index') }}">All Collar</a></li>
                                    @endif
                                    @if ($usr->can('collar.create'))
                                        <li class="{{ Route::is('admin.collar.create')  ? 'active' : '' }}"><a href="{{ route('admin.collar.create') }}">Create Collar</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif
                            @if ($usr->can('gola.create') || $usr->can('gola.view') ||  $usr->can('gola.edit') ||  $usr->can('gola.delete'))
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>
                                    Gola
                                </span></a>
                                <ul class="collapse {{ Route::is('admin.gola.create') || Route::is('admin.gola.index') || Route::is('admin.gola.edit') || Route::is('admin.gola.show') ? 'in' : '' }}">
                                    @if ($usr->can('gola.view'))
                                        <li class="{{ Route::is('admin.gola.index')  || Route::is('admin.gola.edit') ? 'active' : '' }}"><a href="{{ route('admin.gola.index') }}">All Gola</a></li>
                                    @endif
                                    @if ($usr->can('gola.create'))
                                        <li class="{{ Route::is('admin.gola.create')  ? 'active' : '' }}"><a href="{{ route('admin.gola.create') }}">Create Gola</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif

                            @if ($usr->can('plate.create') || $usr->can('plate.view') ||  $usr->can('plate.edit') ||  $usr->can('plate.delete'))
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>
                                    Plate
                                </span></a>
                                <ul class="collapse {{ Route::is('admin.plate.create') || Route::is('admin.plate.index') || Route::is('admin.plate.edit') || Route::is('admin.plate.show') ? 'in' : '' }}">
                                    @if ($usr->can('plate.view'))
                                        <li class="{{ Route::is('admin.plate.index')  || Route::is('admin.plate.edit') ? 'active' : '' }}"><a href="{{ route('admin.plate.index') }}">All Plate</a></li>
                                    @endif
                                    @if ($usr->can('plate.create'))
                                        <li class="{{ Route::is('admin.plate.create')  ? 'active' : '' }}"><a href="{{ route('admin.plate.create') }}">Create Plate</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif

                            @if ($usr->can('pasting.create') || $usr->can('pasting.view') ||  $usr->can('pasting.edit') ||  $usr->can('pasting.delete'))
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>
                                    Pasting
                                </span></a>
                                <ul class="collapse {{ Route::is('admin.pasting.create') || Route::is('admin.pasting.index') || Route::is('admin.pasting.edit') || Route::is('admin.pasting.show') ? 'in' : '' }}">
                                    @if ($usr->can('pasting.view'))
                                        <li class="{{ Route::is('admin.pasting.index')  || Route::is('admin.pasting.edit') ? 'active' : '' }}"><a href="{{ route('admin.pasting.index') }}">All Pasting</a></li>
                                    @endif
                                    @if ($usr->can('pasting.create'))
                                        <li class="{{ Route::is('admin.pasting.create')  ? 'active' : '' }}"><a href="{{ route('admin.pasting.create') }}">Create Pasting</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif

                            @if ($usr->can('lace.create') || $usr->can('lace.view') ||  $usr->can('lace.edit') ||  $usr->can('lace.delete'))
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>
                                    Lace
                                </span></a>
                                <ul class="collapse {{ Route::is('admin.lace.create') || Route::is('admin.lace.index') || Route::is('admin.lace.edit') || Route::is('admin.lace.show') ? 'in' : '' }}">
                                    @if ($usr->can('lace.view'))
                                        <li class="{{ Route::is('admin.lace.index')  || Route::is('admin.lace.edit') ? 'active' : '' }}"><a href="{{ route('admin.lace.index') }}">All Lace</a></li>
                                    @endif
                                    @if ($usr->can('lace.create'))
                                        <li class="{{ Route::is('admin.lace.create')  ? 'active' : '' }}"><a href="{{ route('admin.lace.create') }}">Create Lace</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif

                            @if ($usr->can('ful.create') || $usr->can('ful.view') ||  $usr->can('ful.edit') ||  $usr->can('ful.delete'))
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>
                                    Ful
                                </span></a>
                                <ul class="collapse {{ Route::is('admin.ful.create') || Route::is('admin.ful.index') || Route::is('admin.ful.edit') || Route::is('admin.ful.show') ? 'in' : '' }}">
                                    @if ($usr->can('ful.view'))
                                        <li class="{{ Route::is('admin.ful.index')  || Route::is('admin.ful.edit') ? 'active' : '' }}"><a href="{{ route('admin.ful.index') }}">All Ful</a></li>
                                    @endif
                                    @if ($usr->can('ful.create'))
                                        <li class="{{ Route::is('admin.ful.create')  ? 'active' : '' }}"><a href="{{ route('admin.ful.create') }}">Create Ful</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif

                            @if ($usr->can('button.create') || $usr->can('button.view') ||  $usr->can('button.edit') ||  $usr->can('button.delete'))
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>
                                    Button
                                </span></a>
                                <ul class="collapse {{ Route::is('admin.button.create') || Route::is('admin.button.index') || Route::is('admin.button.edit') || Route::is('admin.button.show') ? 'in' : '' }}">
                                    @if ($usr->can('button.view'))
                                        <li class="{{ Route::is('admin.button.index')  || Route::is('admin.button.edit') ? 'active' : '' }}"><a href="{{ route('admin.button.index') }}">All Button</a></li>
                                    @endif
                                    @if ($usr->can('button.create'))
                                        <li class="{{ Route::is('admin.button.create')  ? 'active' : '' }}"><a href="{{ route('admin.button.create') }}">Create Button</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif

                            @if ($usr->can('lower_pocket.create') || $usr->can('lower_pocket.view') ||  $usr->can('lower_pocket.edit') ||  $usr->can('lower_pocket.delete'))
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><span>
                                    Lower Pocket
                                </span></a>
                                <ul class="collapse {{ Route::is('admin.lower_pocket.create') || Route::is('admin.lower_pocket.index') || Route::is('admin.lower_pocket.edit') || Route::is('admin.lower_pocket.show') ? 'in' : '' }}">
                                    @if ($usr->can('lower_pocket.view'))
                                        <li class="{{ Route::is('admin.lower_pocket.index')  || Route::is('admin.lower_pocket.edit') ? 'active' : '' }}"><a href="{{ route('admin.lower_pocket.index') }}">All Lower Pocket</a></li>
                                    @endif
                                    @if ($usr->can('lower_pocket.create'))
                                        <li class="{{ Route::is('admin.lower_pocket.create')  ? 'active' : '' }}"><a href="{{ route('admin.lower_pocket.create') }}">Create Lower Pocket</a></li>
                                    @endif
                                </ul>
                            </li>
                            @endif
                           
                            {{-- @if ($usr->can('setting.view'))
                                <li class="{{ Route::is('admin.roles.index')  || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">Setting</a></li>
                            @endif
                            @if ($usr->can('setting.create'))
                                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Create Setting</a></li>
                            @endif --}}
                        </ul>
                    </li>
                   
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->