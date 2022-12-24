<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">OTMS</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link text-white">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-link text-white">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Training Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Category1</a></li>
                        <li><a href="" class="dropdown-item">Category2</a></li>
                        <li><a href="" class="dropdown-item">Category3</a></li>
                    </ul>
                </li>
                <li><a href="{{route('all.training')}}" class="nav-link text-white">All Training</a></li>
                <li><a href="{{route('contact')}}" class="nav-link text-white">Contact</a></li>
                <li><a href="{{route('login.registration')}}" class="nav-link text-white">Login/Registation</a></li>
            </ul>
        </div>
    </nav>

    @yield('body')

    <footer>
        <section class="py-5 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card h-100  border-0 shadow">
                            <div class="card-body bg-dark text-white">
                                <h3>OTMS</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae consectetur cumque cupiditate dignissimos eum eveniet ipsum magnam, molestiae odio reprehenderit sequi suscipit ullam? A aliquam corporis eius quam quas?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-body bg-dark text-white">
                                <h4>Popular Traning</h4>
                                <ul class="nav">
                                    <li><a href="" class="nav-link">Php With Laravel FrameWork</a></li>
                                    <li><a href="" class="nav-link">Mobile App Development</a></li>
                                    <li><a href="" class="nav-link">Responsive Web Design</a></li>
                                    <li><a href="" class="nav-link">Professional Digital Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="card card-body h-100 bg-dark text-white rounded-0 border-0 shadow">
                            <h4>Contact With Us</h4>
                            <address>
                                House No-$420, Road No-530, Dhanmondi, Dhaka-1205.
                            </address>
                            <h5>Follow Us</h5>
                            <ul class="nav">
                                <li><a href="" class="nav-link"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="" class="nav-link"><i class="fa-solid fa-envelope"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <hr class="text-white"/>
                        <p class="text-white text-center">copyright@basis_seip_php_batc_13!!walid_hasan</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="{{asset('/')}}js/jquery-3.6.1.js"></script>
    <script src="{{asset('/')}}js/bootstrap.bundle.js"></script>

</body>
</html>
