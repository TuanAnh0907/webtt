<header class="tech-header header">
    <div class="container-fluid">
            <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/"><h2>NEW</h2></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Category
                            </a>
                            <div class="dropdown-menu grid" style="background-color: #ffffff " aria-labelledby="navbarDropdown">        
                                @foreach ($categories as $categories )
                                    <a class="dropdown-item text-light pt-2 pl-4 pb-2" href="{{ route('web.category', $categories->slug) }} ">{{ $categories->name }}</a>
                                @endforeach 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav mr-2">
                        <li class="nav-item">
                            @if (Auth::check())
                                <ul class="navbar-nav">
                                    <div class="dropdown text-lg-left">
                                        <li class="nav-item" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                            <a class="nav-link" href="#"><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i></a>
                                        </li>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><i class="fa fa-user fa-fw"></i> Xin chào {{ Auth::user()->name }} </a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="{{ route('web.logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                            </li>
                                        </div>
                                    </div>
                                </ul>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('web.auth.login') }} ">Login <i class="fa fa-sign-language" aria-hidden="true"></i></a>
                                </li>
                            @endif

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-rss"  aria-hidden="true" ></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-android"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                        </li>
                    </ul>
                    
                </div>
            </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->