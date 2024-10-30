<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        {{-- <span class="logo-lg"><b>{{ ucwords(auth()->user()->name) }}</b></span> --}}
        <span class="logo-lg">
            @php
                $logo = \App\Models\Setting::select('logo')->first();
            @endphp
            @if ($logo && $logo->logo)
                <img src="{{ asset('upload/logo/' . $logo->logo) }}" alt="">
            @else
            @endif

        </span>


    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{-- <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> --}}
                        <span class="hidden-xs">{{ ucwords(auth()->user()->name) }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                {{-- <a href="{{ route('profile.update') }}" class="btn btn-default btn-flat">Profile</a> --}}
                            </div>
                            <div class="pull-right">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                        this.closest('form').submit();"
                                        class="btn btn-default btn-flat">Sign out</a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
