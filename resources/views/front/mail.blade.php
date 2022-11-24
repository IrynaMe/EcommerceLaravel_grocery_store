@extends('front.layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
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
    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ url('/') }}">Home</a><span>|</span></li>
                <li>Contatti</li>
            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
    <!-- banner -->
    <div class="banner">
        <div class="w3l_banner_nav_left">
            @include('front/menuvert')
        </div>
        <div class="w3l_banner_nav_right">
            <!-- mail -->
            <div class="mail">
                <h3>Mail Us</h3>
                <div class="agileinfo_mail_grids">
                    <div class="col-md-4 agileinfo_mail_grid_left">
                        <ul>
                            <li><i class="fa fa-home" aria-hidden="true"></i></li>
                            <li>address<span>868 1st Avenue NYC.</span></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                            <li>email<span><a href="mailto:inero@mail.ru">inero@mail.ru</a></span></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i></li>
                            <li>call to us<span>(+123) 233 2362 826</span></li>
                        </ul>
                    </div>
                    <div class="col-md-8 agileinfo_mail_grid_right">
                        <form action="/contatti" method="post">
                            @csrf
                            <div class="col-md-6 wthree_contact_left_grid">
                                <label for="Name">name*</label>
                                <input type="text" name="Name" value="Il tuo nome" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Name*';}">
                                <label for="Email">email*</label>
                                <input type="email" name="Email" value="Il tuo email" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Email*';}" required="">
                            </div>
                            <div class="col-md-6 wthree_contact_left_grid">
                                <label for="Subject">subject*</label>
                                <input type="text" name="Subject" value="Tema del messaggio" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'Subject*';}">
                            </div>
                            <div class="clearfix"> </div>

                            <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Messaggio...';}">Message...</textarea>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Clear">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //mail -->
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96748.15352429623!2d-74.25419879353115!3d40.731667701988506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sshopping+mall+in+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1467205237951"
            style="border:0"></iframe>
    </div>
    <!-- //map -->
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
