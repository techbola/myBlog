<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="user-pro">
                <a href="#" class="waves-effect">
                    <img src="{{asset('admin/plugins/images/users/techbola.png')}}" alt="user-img" class="img-circle">
                    <span class="hide-menu">
                        {!! Auth::guard('admin')->user()->name !!}
                    </span>
                </a>
                <ul class="nav">

                    <li><a href=""><i class="ti-settings"></i> Account Setting</a></li>
                    <li><a href="{!! url('admin/logout') !!}"><i class="fa fa-power-off"></i> Logout</a></li>

                </ul>
            </li>

        </ul>

        <div class="list-group">
          <a class="list-group-item {{ Request::is('admin/dashboard') ? 'nav_change' : '' }}" href="{!! url('admin/dashboard') !!}">
            <i class="fa fa-navicon fa-fw" aria-hidden="true"></i>&nbsp; Add New Post
          </a>
          <a class="list-group-item {{ Request::is('admin/all-posts') ? 'nav_change' : '' }}" href="{{ route('allPosts') }}">
            <i class="fa fa-navicon fa-fw" aria-hidden="true"></i>&nbsp; Manage Posts
          </a>

          <a class="list-group-item {{ Request::is('admin/add-portfolio') ? 'nav_change' : '' }}" href="{!! route('createPortfolio') !!}">
            <i class="fa fa-navicon fa-fw" aria-hidden="true"></i>&nbsp; Add New Portfolio
          </a>
          <a class="list-group-item {{ Request::is('admin/all-portfolios') ? 'nav_change' : '' }}" href="{{ route('allPortfolios') }}">
            <i class="fa fa-navicon fa-fw" aria-hidden="true"></i>&nbsp; Manage Portfolios
          </a>

          <a class="list-group-item" href="">
            <i class="fa fa-navicon fa-fw" aria-hidden="true"></i>&nbsp; Subscribers
          </a>
        </div>

    </div>
</div>
