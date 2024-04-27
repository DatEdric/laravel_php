<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin_asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin_asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.logout') }}" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            MENU
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li>

                            <button class="btn btn-light dropdown-toggle w-100" type="button"
                                data-toggle="dropdown">
                                Thể loại sách
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu w-100">
                                <li> <a href="{{ route('category.index') }}" class="nav-link">
                                        <p style="color: black">
                                            Danh sách các thể loại</p>
                                    </a>
                                </li>
                                <li> <a href="{{ route('category.create') }}" class="nav-link">
                                        <p style="color: black">
                                           Tạo danh mục thể loại sách mới</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <button class="btn btn-light dropdown-toggle w-100 mt-1" type="button"
                                data-toggle="dropdown">Sách
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu w-100">
                                <li> <a href="{{ route('book.index') }}" class="nav-link">
                                        <p style="color: black">
                                            Chi tiết các đầu sách</p>
                                    </a>
                                </li>
                                <li> <a href="{{ route('book.create') }}" class="nav-link">
                                        <p style="color: black">
                                            Thêm sách mới</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <button class="btn btn-light dropdown-toggle w-100 mt-1" type="button"
                                data-toggle="dropdown">Nhà Xuất Bản
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu w-100">
                                <li> <a href="{{ route('publisher.index') }}" class="nav-link">
                                        <p style="color: black">
                                            Danh sách nhà xuất bản</p>
                                    </a>
                                </li>
                                <li> <a href="{{ route('publisher.create') }}" class="nav-link">
                                        <p style="color: black">
                                            Thêm nhà xuất bản mới</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
