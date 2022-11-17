@extends('front.layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('status'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('status') }}
            {{ Session::put('status', null) }}
        </div>
    @endif
    <!-- login -->
    <div class="w3_login">
        <h3>Sign In & Sign Up</h3>
        <div class="w3_login_module">
            <div class="module form-module">
                <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                    <div class="tooltip">Click Me</div>
                </div>
                <div class="form">
                    <h2>Login to your account</h2>
                    <form action="/accesso" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="Username" required=" ">
                        <input type="password" name="password" placeholder="Password" required=" ">
                        <input type="submit" value="Login">
                    </form>
                </div>
                <div class="form" id="registrazione">
                    <h2>Create an account</h2>
                    <form action="/registrati" method="post">
                        @csrf
                        <input type="email" name="email" placeholder="Email Address" required=" ">
                        <input type="password" name="password" placeholder="Password" required=" ">
                        <input type="submit" value="Register">
                    </form>
                </div>
                <div class="cta"><a href="#">Forgot your password?</a></div>
            </div>
        </div>
        <script>
            $('.toggle').click(function() {
                // Switches the Icon
                $(this).children('i').toggleClass('fa-pencil');
                // Switches the forms  
                $('.form').animate({
                    height: "toggle",
                    'padding-top': 'toggle',
                    'padding-bottom': 'toggle',
                    opacity: "toggle"
                }, "slow");
            });
        </script>
    </div>
    <!-- //login -->
    </div>
    <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- newsletter-top-serv-btm -->
    <div class="newsletter-top-serv-btm">
        <div class="container">
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
                <div class="wthree_news_top_serv_btm_grid_icon">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <h3>Nam libero tempore</h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et.</p>
            </div>
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
                <div class="wthree_news_top_serv_btm_grid_icon">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                </div>
                <h3>officiis debitis aut rerum</h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et.</p>
            </div>
            <div class="col-md-4 wthree_news_top_serv_btm_grid">
                <div class="wthree_news_top_serv_btm_grid_icon">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
                <h3>eveniet ut et voluptates</h3>
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
                    saepe eveniet ut et voluptates repudiandae sint et.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //newsletter-top-serv-btm -->
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="w3agile_newsletter_left">
                <h3>sign up for our newsletter</h3>
            </div>
            <div class="w3agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" value="Email" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="subscribe now">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //newsletter -->
@endsection
