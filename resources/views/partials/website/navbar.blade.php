<div class="header-area header-1">
    <div class="navbar-area">

        <div class="main-responsive-nav">
            <div class="container">
                <div class="mobile-nav">
                    <a href="/" class="logo "><img src="{{asset('assets/website/assets/images/star.png')}}"
                            height="10px" width="100px" alt="logo" /></a>
                </div>
            </div>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img src="{{asset('assets/website/assets/images/star.png')}}" height="54px" width="151px"
                            alt="logo" />
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <a href="{{url('/')}}" class="nav-link  active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/')}}/#about" class="nav-link ">About us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#articles" class="nav-link dropdown-toggle">Articles</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{url('child_right')}}" class="nav-link">Childs RIght</a></li>
                                    <li class="nav-item"><a href="{{url('importance_of_child_right')}}" class="nav-link">Importance of Child Right</a></li>
                                    <li class="nav-item"><a href="{{url('child_trafficking')}}" class="nav-link">Child Trafficking</a></li>
                                    <li class="nav-item"><a href="{{url('effect_of_bullying')}}" class="nav-link">Effect of Bullying on Mental Health</a></li>
                                    <li class="nav-item"><a href="{{url('effect_of_bullying')}}" class="nav-link">Teach your Child Body Part Early</a></li>
                                    </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#services" class="nav-link ">Services</a>
                            </li> --}}
                            <li class="nav-item"><a href="{{url('/')}}#contact" class="nav-link">Contact Us</a></li>
                            <li class="nav-item">
                                <a href="{{url('terms_conditions')}}" class="nav-link ">T&C</a>
                            </li>
                            <li class="nav-item">
                                <a href="contestants" class="nav-link ">Contestants</a>
                            </li>
                        </ul>
                        <div class="menu-sidebar">
                            <a class="default-button" href="{{url('register_contestant')}}">Register contestant <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>