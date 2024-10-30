<header>
    <section>
        <div class="top-header">
            <div class="container">
                <h6 class="rules"><b> Notice</b></h6>
                <div>
                    <marquee behavior="" direction="">{{ $setting->notice }}</marquee>
                </div>
            </div>
        </div>
        <nav class="menu-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-4">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                {{-- <img src="{{asset('frontend')}}/images/logo.png" alt="logo"> --}}
                                <img src="{{ asset('upload/logo/' . $setting->logo) }}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block text-center">
                        <nav>
                            <div class="main_menu d-flex justify-content-center">
                                <ul class="d-flex gap-3">
                                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
                                    <li><a href="{{route('admin.frontend')}}"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="{{route('subadmin.frontend')}}"><i class="fa fa-user"></i> Sub Admin</a></li>
                                    <li><a href="{{route('super.frontend')}}"><i class="fa fa-user"></i> Super</a></li>
                                    <li><a href="{{route('master.frontend')}}"><i class="fa fa-user"></i> Master</a></li>
                                    <li><a href="{{route('customer.frontend')}}"><i class="fa-solid fa-sliders"></i> Support</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-8 d-flex align-items-center gap-3 justify-content-end">
                        <div class="search text-end">
                            <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#agentSearch"><i
                                    class="fa fa-search"></i>
                                Search Agent</button>
                        </div>
                        <div class="bars  d-lg-none" data-bs-toggle="offcanvas" href="#offcanvasExample"
                            role="button" aria-controls="offcanvasExample">
                            <i class="fa fa-bars"></i>
                        </div>

                        <!-- mobile menu -->
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu Bar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <nav>
                                    <div class="main_menu">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">
                                                    <i class="fa fa-home"></i> Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('admin.frontend') }}" class="{{ request()->is('admin') ? 'active' : '' }}">
                                                    <i class="fa fa-user"></i> Admin
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('subadmin.frontend') }}" class="{{ request()->is('sub-admin') ? 'active' : '' }}">
                                                    <i class="fa fa-user"></i> Sub Admin
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('super.frontend') }}" class="{{ request()->is('super') ? 'active' : '' }}">
                                                    <i class="fa fa-user"></i> Super
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('master.frontend') }}" class="{{ request()->is('master') ? 'active' : '' }}">
                                                    <i class="fa fa-user"></i> Master
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('customer.frontend') }}" class="{{ request()->is('customer') ? 'active' : '' }}">
                                                    <i class="fa-solid fa-sliders"></i> Support
                                                </a>
                                            </li>
                                        </ul>
                                    </div>                                                                       
                                </nav>
                            </div>
                        </div>

                        <!-- agent search modal -->
                        <div class="modal fade" id="agentSearch" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Search Agent </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('search') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="type"><b>Type</b></label>
                                                <select name="type" id="type" class="form-select">
                                                    <option value="all">All</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="superagent">Super Agent</option>
                                                    <option value="masteragent">Master Agent</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="agent"><b>Search By Agent ID</b></label>
                                                <input type="text" id="agent" name="agent" placeholder="Agent ID Number" class="form-control">
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="whatsapp"><b>Search By WhatsApp</b></label>
                                                <input type="text" id="whatsapp" name="whatsapp" placeholder="WhatsApp Number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn">Search</button>
                                        </div>
                                    </form>                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
</header>