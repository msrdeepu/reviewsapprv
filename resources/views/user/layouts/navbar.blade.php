 <div class="menu-part">
                <div class="container">
                    <!--================= Menu Start Here =================-->
                    <div class="react-main-menu">
                       <nav>
    <!--================= Menu Toggle btn =================-->
    <div class="menu-toggle">
        <div class="logo">
            <a href="/" class="logo-text">
                <img style='height:60px;' src="{{ asset('backend/frontassets/images/logo/header-logo.png') }}" alt="logo">
            </a>
        </div>
        <button type="button" id="menu-btn">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!--================= Menu Structure =================--> 
    <div class="react-inner-menus">
        <ul id="backmenu" class="react-menus home react-sub-shadow">
              <li><a href="{{ route('main.home') }}">Home</a></li>
            <li> <a href="{{ route('main.allquizzes') }}">Play Quizzes</a></li>
            <li> <a href="/page/about-us">About</a></li>
            <li> <a href="{{ route('main.contact') }}">Contact</a></li>
            @guest 
           <li class='d-md-none'><a href="/login" class='btn btn-primary text-white'> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>Login</a></li>
                             @endguest
             @auth
<li class='d-md-none'>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-link btn-danger m-2 p-2 text-white" style="text-decoration:none; padding: 0;">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg> Logout
        </button>
    </form>
</li>
    @endauth

        </ul>  
        
        @guest
            <!-- Show when user is not authenticated -->
            <div class="searchbar-part"> 
                <div class="react-login">
                    <a href="/login">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>Log In
                    </a>
                </div>                                                                       
            </div>
        @endguest
        
        @auth
            <!-- Show when user is authenticated -->
            <div class="searchbar-part">
                <div class="user-info">
                    <p>
                        <strong>{{ Auth::user()->name }}</strong> <br>
                        {{ Auth::user()->email }}
                    </p>
                </div>
                <div class="react-login">
                    <!-- Logout Button -->
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link" style="text-decoration:none; color:inherit;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>Logout
                        </button>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>

                    </div>
                    <!--=================  Menu End Here  =================-->
                </div>
            </div>