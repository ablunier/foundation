<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('adoadomin.dashboard') }}" class="logo">{!! config('adoadomin.site_name') !!}</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        @if ($hasSidebar)
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">{{ trans('adoadomin::messages.toogle_navigation') }}</span>
        </a>
        @endif

        @if ($modules)
        <ul class="nav navbar-nav">
            @foreach ($modules as $module)
            <li class="active"><a href="{{ $module->mainRoute() }}">{{ $module->name() }} <span class="sr-only">(current)</span></a></li>
            @endforeach
        </ul>
        @endif

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @if ($user)
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        @if ($user->getAvatar())
                        <img src="{{ $user->getAvatar() }}" class="user-image" alt=""/>
                        @endif
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ $user->getName() }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            @if ($user->getAvatar())
                            <img src="{{ $user->getAvatar() }}" class="img-circle" alt="" />
                            @endif
                            <p>{{ $user->getName() }}</p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">{{ trans('adoadomin::messages.signout') }}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </nav>
  </header>