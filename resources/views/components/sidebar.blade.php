<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>Pinjam Buku</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <h2>{{ Auth::user()->name }}</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
                <li><a href="/"><i class="fa fa-home"></i> Home</a>
                </li>
                @if (Auth::user()->role == 'admin')
                    <li><a href="/users"><i class="fa fa-user"></i> Data User</a>
                    </li>
                @endif
                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'petugas')
                    <li><a href="/books"><i class="fa fa-edit"></i> Data Barang</a>
                    </li>
                    <li><a href="/categories"><i class="fa fa-list"></i> Kategori Buku</a>
                    </li>
                @else
                    <li><a href="/peminjaman"><i class="fa fa-desktop"></i> Peminjaman</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>
