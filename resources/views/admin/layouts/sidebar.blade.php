<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://file.tinnhac.com/resize/600x-/2019/06/30/20190630230440-2703.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>CNPM</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
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
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-calendar"></i> <span>Bảng điều khiển</span>
                </a>
            </li>
            <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-dashboard"></i> <span>QL Danh mục</span></a></li>
            <li><a href="{{ route('admin.news.index') }}"><i class="fa fa-database"></i> <span>QL Tin Tức</span></a></li>
            <li><a href="{{ route('admin.banner.index') }}"><i class="fa fa-photo"></i> <span>QL Banner</span></a></li>
            <li><a href="{{ route('admin.user.index') }}"><i class="fa fa-user"></i> <span>QL Người dùng</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
