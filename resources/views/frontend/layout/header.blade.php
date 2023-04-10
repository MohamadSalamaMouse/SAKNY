<header class="header">

    <nav class="navbar nav-1">
        <section class="flex">
            <a href="home.html" class="logo"><i class="fas fa-house"></i>MyHome</a>

            <ul>
                <li><a href="{{route('property')}}">post property<i class="fas fa-paper-plane"></i></a></li>
            </ul>
        </section>
    </nav>

    <nav class="navbar nav-2">
        <section class="flex">
            <div id="menu-btn" class="fas fa-bars"></div>

            <div class="menu">
                <ul>

                    <li><a href="#">my listings<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="dashboard.php">dashboard</a></li>
                            <li><a href="post_property.php">post property</a></li>
                            <li><a href="my_listings.php">my listings</a></li>
                        </ul>
                    </li>
                    <li><a href="#">options<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{route('search.index')}}">filter search</a></li>
                            <li><a href="{{route('all listings')}}">all listings</a></li>
                        </ul>
                    </li>
                    <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="{{route('contact.about')}}">about us</a></i></li>
                            <li><a href="{{route('contact')}}">contact us</a></i></li>
                            <li><a href="{{route('contact')}}">FAQ</a></i></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <ul>
                <li><a href="#">saved <i class="far fa-heart"></i></a></li>
                <li><a href="#">account <i class="fas fa-angle-down"></i></a>
                    <ul>
                        <li><a href="{{route('login')}}">login</a></li>
                        <li><a href="{{route('register')}}">register</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>

</header>
