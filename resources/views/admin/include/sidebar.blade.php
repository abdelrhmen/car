          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.users.index')}}">Users List</a></li>
                            <li><a href="{{route('admin.users.create')}}">Add User</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.category.index')}}">ListCategory</a></li>
                            <li><a href="{{route('admin.category.create')}}">Add Categories</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Cars <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.car.index')}}">Cars List</a></li>
                            <li><a href="{{route('admin.car.create')}}">Add Car</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-desktop"></i> Testimonials <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.testimonials.index')}}">List Testimonials</a></li>
                            <li><a href="{{route('admin.testimonials.create')}}">Add Testimonials</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-desktop"></i> Messages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('admin.message.index')}}">Messages</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
