<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo">
                        <a href="{{route('Home')}}"><i class="fa-solid fa-florin-sign" style="margin-right:2px;"></i><i class="fa-brands fa-opera" style="font-size: 28px; margin-right:2px;"></i><i class="fa-brands fa-opera" style="font-size: 28px; margin-right:2px;"></i>twear </a>
                    </div>
                </div>
                <div class="col-sm-5 col-md-3">
                    <form action="#" class="search-wrap">
                        <div class="form-group">
                            <a href="{{route('Profile')}}">
                                <i class="fa-solid fa-user float-right pr-3" style="font-size: 25px;"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-left menu-1">
                    <ul>
                        <!-- <li class="has-dropdown">
                            <a href="#">Shop</a>
                            <ul class="dropdown">
                                <li><a href="#">Product Detail</a></li>
                                <li><a href="#">Shopping Cart</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Order Complete</a></li>
                                <li><a href="#">Wishlist</a></li>
                            </ul>
                        </li> -->
                        <li><a href="{{route('Home')}}" class="home">Home</a></li>
                        <li><a href="{{route('About')}}" class="about">About</a></li>
                        <li><a href="{{route('Shop')}}" class="shop">Shop</a></li>

                        <li><a href="{{route('Contact')}}" class="contact">Contact</a></li>
                        <li><a href="{{route('Regestration')}}" class="regestration">Regestration</a></li>
                        <li class="cart">
                            <a href="{{route('Cart')}}" class="cart"><i class="icon-shopping-cart cart"></i> Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sale">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center">
                    <div class="row">
                        <div class="owl-carousel2">
                            <div class="item">
                                <div class="col">
                                    <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col">
                                    <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>