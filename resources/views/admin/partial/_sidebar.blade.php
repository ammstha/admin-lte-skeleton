<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                {{--                <li class="nav-item has-treeview menu-open">--}}
                {{--                    <a href="#" class="nav-link {{Request::is('admin/room/') ? 'active' : '' }}">--}}
                {{--                        <i class="nav-icon fas fa-tachometer-alt"></i>--}}
                {{--                        <p>--}}
                {{--                          Rooms--}}
                {{--                            <i class="right fas fa-angle-left"></i>--}}
                {{--                        </p>--}}
                {{--                    </a>--}}
                {{--                    <ul class="nav nav-treeview">--}}
                {{--                        <li class="nav-item">--}}
                {{--                            <a href="{{route('admin.room.create')}}" class="nav-link {{Request::is('admin/room/create') ? 'active' : '' }}">--}}
                {{--                                <i class="far fa-circle nav-icon"></i>--}}
                {{--                                <p>Create</p>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li class="nav-item">--}}
                {{--                            <a href="{{route('admin.room.index')}}" class="nav-link {{Request::is('admin/room') ? 'active' : '' }}">--}}
                {{--                                <i class="far fa-circle nav-icon"></i>--}}
                {{--                                <p>ALl Room</p>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}

                {{--                    </ul>--}}
                {{--                </li>--}}
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}"
                       class="nav-link {{Request::is('admin/dashboard') ? 'active' : '' }}">
                        <i class="fas fa-circle nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
