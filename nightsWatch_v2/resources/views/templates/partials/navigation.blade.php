<div class="header-menu">
    <!-- it can be implemented in another file -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <nav class="menu-top" style="background-image: url('img/background.jpg')">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="offset-lg-4 col-lg-2"> <i></i> Order Foods 24/7</div>
                            <div class="col-lg-3"> <i></i> +998 93 591-73-81 </div>
                            <div class="col-lg-3">
                                <div class="social">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fas fa-envelope"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav><!-- /menu-top -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <nav class="menu-bottom">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="offset-lg-4 col-lg-8">
                                <ul class="nav-menu">
                                    <li class="nav-menu-item"><a href="/">Home</a></li>
                                    <li class="nav-menu-item"><a href="#">About Us</a></li>
                                    <li class="nav-menu-item"><a href="/menu">Menu</a></li>
                                    <li class="nav-menu-item-book"><span><a href="#" class="booking_btn">Table Booking</a></span></li>
                                    <!-- <li class="nav-menu-item-login"><a href="#">Login</a></li> -->
                                    @if (Auth::check())
                                    <li class="nav-menu-item-login"><a href="#">{{ Auth::user()->getNameOrUsername() }}</a></li>
                                    <li class="nav-menu-item-login"><a href="#">Update profile</a></li>
                                    <li class="nav-menu-item-login"><a href="{{ route('auth.signout') }}">Sign Out</a></li>
                                    @else
                                    <li class="nav-menu-item-login"><a href="{{route('auth.signup')}}">Sign Up</a></li>
                                    <li class="nav-menu-item-login"><a href="{{route('auth.signin')}}">Sign In</a></li>
                                    @endif
                                    <li class="nav-menu-item-cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div><!-- /header-menu includes (menu-top,menu-bottom) -->
