


<!--<body data-spy="scroll" data-target=".header" data-offset="50">-->

	<!-- Page loader -->
<!--	<div id="preloader"></div>-->
	<!-- header section start -->
<!--	<header class="header">-->
<!--		<div class="headercontainer">-->
<!--			<div class="row ">-->
<!--				<div class="col-lg-2 col-md-2 col-6">-->
<!--					<div class="logo">-->
<!--						<a href="index-2.html">-->
<!--							<img src="../www.naya11.com/desktop_assets/img/logo.png" alt="Gamethon - online gaming" width="100"/>-->
<!--						</a>-->
<!--					</div>-->
<!--				</div>-->
				
<!--					<div class="col-lg-8 col-md-8 col-5">-->
<!--					<div class="responsive-menu"></div>-->
<!--				   <div class="mainmenu"> -->
	               <!--     <ul id="primary-menu"> -->
<!--	              <li><a class="nav-link active" href="">Home</a></li>-->
<!--	              <li><a class="nav-link" href="">About</a></li>-->
<!--	                        <li><a class="nav-link active" href="">All Games</a></li>-->
<!--	                          <li><a class="nav-link" href="" target="_blank">Popular</a></li>-->
<!--	                 <li><a class="nav-link" href="">Strategy</a></li>-->
<!--	                   <li><a class="nav-link" href="">Categories</a></li>-->
<!--	                          <li><a class="nav-link" href="" target="_blank">Blog</a></li>-->
<!--	                     <li><a class="nav-link" href="">Contact</a></li>-->
	                 
<!--				  </div>-->
<!--				</div>-->
				
<!--				<div class="col-lg-2 col-md-2 col-4">-->
<!--					<div class="responsive-menu"></div>-->
<!--				   <div class="mainmenu">-->
<!--	                     	         @guest-->
<!--    <a href="{{ route('login') }}" class="d-block nav-link" style="border: 1px solid; padding: 3px 20px; border-radius: 5px; color: #fff; text-align: center;">Login</a>-->
<!--@else-->
<!--    <div class="dropdown">-->
<!--        <a href="#" class="d-block nav-link" style="border: 1px solid; padding: 3px 20px; border-radius: 5px; color: #fff; text-align: center;">{{ Auth::user()->name }}</a>-->
<!--        <ul class="dropdown-menu" style="margin-top: 0px;">-->
<!--            <li class="nav-item">-->
<!--                <a class="authstyle nav-link dropdown-item d-flex align-items-center" href="{{ route('logout') }}"-->
<!--                    onclick="event.preventDefault();-->
<!--                    document.getElementById('logout-form').submit();">-->
<!--                    Logout <i class="fas fa-sign-out-alt" style="margin-left: 5px;"></i>-->
<!--                </a>-->

<!--                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">-->
<!--                    @csrf-->
<!--                </form>-->

<!--                {{-- Check user role to display specific links --}}-->
<!--                @if(Auth::user()->role == 2)-->
<!--                    <a href="{{ route('user.profile')}}" class="authstyle nav-link dropdown-item d-flex align-items-center {{ (request()->is('user/profile*')) ? 'active' : '' }}">-->
<!--                        <span>Profile <i class="fas fa-user" style="margin-left: 5px;"></i></span> <i class="bi bi-gear" style="margin-left: auto;"></i>-->
<!--                    </a>-->
<!--                    <a href="{{ route('addwallet') }}" class="authstyle nav-link dropdown-item d-flex align-items-center {{ (request()->is('addwallet*')) ? 'active' : '' }}">Add Wallet <i class="fas fa-wallet" style="margin-left: 5px;"></i></a>-->
<!--                @endif-->

<!--                @if(Auth::user()->role == 1)-->
<!--                    <a href="{{ route('admin.dashboard')}}" class="authstyle nav-link dropdown-item d-flex align-items-center {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">-->
<!--                        <span>Dashboard <i class="nav-icon fas fa-home" style="margin-left: 5px;"></i></span> <i class="bi bi-gear" style="margin-left: auto;"></i>-->
<!--                    </a>-->
<!--                    <a href="{{ route('addwallet') }}" class="authstyle nav-link dropdown-item d-flex align-items-center {{ (request()->is('addwallet*')) ? 'active' : '' }}">Add Wallet <i class="fas fa-wallet" style="margin-left: 5px;"></i></a>-->
<!--                @endif-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--@endguest-->
<!--				  </div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
		
<!--	</header>-->
	
	<style>
    /* Style for dropdown */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    /* Style for dropdown menu */
    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #11142d; /* Change the background color as needed */
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Add box shadow for a subtle effect */
        z-index: 1;
        border-radius: 5px;
        margin-top: 5px;
        min-width: 150px; /* Adjust the width as needed */
    }

    /* Style for dropdown items */
    .dropdown-item {
        padding: 10px;
        text-decoration: none;
        color: #333; /* Change the text color as needed */
        display: block;
        transition: background-color 0.3s;
    }

    .dropdown-item:hover {
        background-color: #f1f1f1; /* Change the hover background color as needed */
    }

    /* Additional styles for better appearance */
    .nav-link {
        text-decoration: none;
        color: #333;
    }

    .nav-link:hover {
        color: #555; /* Change the hover color as needed */
    }
    .headercontainer{
        margin-left: 35px;
        margin-right: 35px;
    }
</style>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
    <div class="container">
        <!-- logo -->
        <a class="site-logo" href="index.html">
            <img src="img/logo.png" alt="Esport">
        </a>
        <div class="user-panel">
            @guest
                <a href="{{ route('login') }}" class="d-block nav-link" style=" color: #fff; text-align: center;">Login / Register</a>
            @else
                <div class="dropdown">
                    <a href="#" class="d-block nav-link" style="border-bottom: 2px solid; padding: 0px 0px; color: #fff; text-align: center;">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu" style="margin-top: 0px; display: contents;">
                        <li class="nav-item" style="display: inline-flex;">
                            <a class="authstyle nav-link dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout <i class="fas fa-sign-out-alt" style="margin-left: 5px;"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            {{-- Check user role to display specific links --}}
                            @if(Auth::user()->role == 2)
                                <a href="{{ route('user.profile')}}" class="authstyle nav-link dropdown-item d-flex align-items-center {{ (request()->is('user/profile*')) ? 'active' : '' }}"> Profile <i class="bi bi-gear" style="margin-left: auto;"></i> </a>
                                
                                <a href="{{ route('addwallet') }}" class="authstyle nav-link dropdown-item d-flex align-items-center {{ (request()->is('addwallet*')) ? 'active' : '' }}">Add Wallet <i class="fas fa-wallet" style="margin-left: 5px;"></i></a>
                            @endif

                            @if(Auth::user()->role == 1)
                                <a href="{{ route('admin.dashboard')}}" class="authstyle nav-link dropdown-item d-flex align-items-center {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}"> Dashboard <i class="bi bi-gear" style="margin-left: auto;"></i>
                                </a>
                                <a href="{{ route('addwallet') }}" class="authstyle nav-link dropdown-item d-flex align-items-center {{ (request()->is('addwallet*')) ? 'active' : '' }}">Add Wallet <i class="fas fa-wallet" style="margin-left: 5px;"></i></a>
                            @endif
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
        <!-- responsive -->
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <!-- site menu -->
        <nav class="main-menu">
            <ul>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li><a href="">Games</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Forums</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
