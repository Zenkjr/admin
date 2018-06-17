<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Lô Văn Ngộc</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> <span>Site Config</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">List Car</a></li>
                    <li><a href="#">Create New Car</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-car" aria-hidden="true"></i> <span>Car Manager</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/car/list">List Car</a></li>
                    <li><a href="/admin/car/create">Create New Car</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-bandcamp" aria-hidden="true"></i> <span>Brand Manager</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/brand/list">List Brand</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-bars" aria-hidden="true"></i> <span>Class Manager</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/admin/clazz/list">List Class</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>Article Manager</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">List Article</a></li>
                    <li><a href="#">Create New Article</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> <span>Preorder Manager</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/preorder/list">List Preorder</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-globe" aria-hidden="true"></i> <span>Country Manager</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/country/list">List Country</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Images Manager</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/image/list">List Images</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-archive" aria-hidden="true"></i> <span>car in stock</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/stock/list">List car in stock</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-eyedropper" aria-hidden="true"></i>
                    <span>Color</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="admin/color/list">List Color</a></li>
                </ul>
            </li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
