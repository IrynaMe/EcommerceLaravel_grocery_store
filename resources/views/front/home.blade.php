@extends('front.layout')
@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="w3l_banner_nav_left">
            <!-- ------------------Placed the code from here to menuvert.blade.php -->
            @include('front/menuvert')
        </div>
        <div class="w3l_banner_nav_right">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="w3l_banner_nav_right_banner">
                                <h3>Make your <span>food</span> with Spicy.</h3>
                                <div class="more">
                                    <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                        data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_nav_right_banner1">
                                <h3>Make your <span>food</span> with Spicy.</h3>
                                <div class="more">
                                    <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                        data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="w3l_banner_nav_right_banner2">
                                <h3>upto <i>50%</i> off.</h3>
                                <div class="more">
                                    <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                        data-text="Shop now">Shop now</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- flexSlider -->
            <link rel="stylesheet" href="tema/css/flexslider.css" type="text/css" media="screen" property="" />
            <script defer src="tema/js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- //flexSlider -->

        </div>
        <div class="clearfix"></div>
    </div>
    <!-- banner -->
    <div class="banner_bottom">
        <div class="wthree_banner_bottom_left_grid_sub">
        </div>
        <div class="wthree_banner_bottom_left_grid_sub1">
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="tema/images/4.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_bottom_left_grid_pos">
                        <h4>Discount Offer <span>25%</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="tema/images/5.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos">
                        <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wthree_banner_bottom_left">
                <div class="wthree_banner_bottom_left_grid">
                    <img src="tema/images/6.jpg" alt=" " class="img-responsive" />
                    <div class="wthree_banner_btm_pos1">
                        <h3>Save <span>Upto</span> $10</h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- PRODOTTI IN SCONTO-->
    <div class="top-brands">
        <div class="container">
            <h3>Prodotti in sconto</h3>
            <div class="agile_top_brands_grids">
                @foreach ($products as $product)
                    <div class="col-md-3 top_brand_left" style="min-height:500px; width:280px">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid" style="height:440px">
                                <div class="tag"><img src="tema/Images/tag.png" alt=" " class="img-responsive"
                                        style="z-index:20;" />
                                </div>
                                <div class="agile_top_brand_left_grid1" style="height:419px">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="single/{{ $product->id }}">

                                                    <h4 style="margin:20px 0 25px 0;"> {{ $product->name }}</h4>
                                                    <div style="height:150px;">
                                                        <img title=" {{ $product->image }}" alt=" {{ $product->image }}"
                                                            src="tema/{{ $product->image }}" style="max-height:150px;" />
                                                    </div>
                                                </a>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">

                                                        <p><del style="font-size:12px;color:gray;">
                                                                {{ $product->price }} €;
                                                                <p style="margin-top:-15px">
                                                                    <p style="font-weight:bold;">
                                                                        Scontato a:
                                                                        {{ $product->discount }} €;

                                                                    </p>
                                                                </p>
                                                        </p>
                                                    </div>
                                                </div>


                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="snipcart-details 
										top_brand_home_details">
                                                <form action="{{ url('/addcart/' . $product->id) }}" method="post">
                                                    @csrf
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name"
                                                            value="{{ $product->name }}" />
                                                        <input type="hidden" name="amount"
                                                            value="{{ $product->price }}" />
                                                        <input type="hidden" name="discount_amount"
                                                            value="{{ $product->discount }}" />
                                                        <input type="submit" name="submit" value="add"
                                                            class="button" />
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $product->id }}">
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>

        <!----------------- NUOVI PRODOTTI CREATE NELGLI ULTIMI 30 GIORNI------------------>

        <div class="container">
            <h3>Nuovi prodotti del mese</h3>
            @php
                // conto data di oggi in milisecondi
                $oggi = time();
                //86400 ore *30 gg
                $novita = 30 * 24 * 60 * 60;
                
            @endphp
            <div class="agile_top_brands_grids">
                @foreach ($Newproducts as $Newproduct)
                    @php
                        $creato = $Newproduct->date;
                        // ricevo 2022-10-27 00:00:00
                        $creato = strtotime($creato);
                        $nuovo = $oggi - $creato - $novita;
                    @endphp
                    @if ($nuovo < 0)
                        {{-- Metto il template del prodotto html --}}
                        <div class="col-md-3 top_brand_left" style="min-height:500px; width:280px">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid" style="height:440px">
                                    <div class="tag"><img src="tema/Images/novita.png" alt=" "
                                            class="img-responsive" style="margin-top: 20px;height:50px; z-index:20;" />
                                    </div>
                                    <div class="agile_top_brand_left_grid1" style="height:419px">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single/{{ $Newproduct->id }}">

                                                        <h4 style="margin:20px 0 25px 0;"> {{ $Newproduct->name }}</h4>
                                                        <div style="height:150px;">
                                                            <img title=" {{ $Newproduct->image }}"
                                                                alt=" {{ $Newproduct->image }}"
                                                                src="tema/{{ $Newproduct->image }}"
                                                                style="max-height:150px;" />
                                                        </div>
                                                    </a>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <p><del style="font-size:12px;color:gray;">
                                                                    {{ $product->price }} €
                                                                    <p style="margin-top:-15px">
                                                                        <b>scontato a:{{ $product->discount }} €;</b>
                                                                    </p>
                                                            </p>
                                                        </div>
                                                    </div>


                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div
                                                    class="snipcart-details 
                                            top_brand_home_details">
                                                    <form action="{{ url('/addcart/' . $product->id) }}" method="post">
                                                        @csrf
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart" />
                                                            <input type="hidden" name="add" value="1" />
                                                            <input type="hidden" name="business" value=" " />
                                                            <input type="hidden" name="item_name"
                                                                value="{{ $product->name }}" />
                                                            <input type="hidden" name="amount"
                                                                value="{{ $product->price }}" />
                                                            <input type="hidden" name="discount_amount"
                                                                value="{{ $product->discount }}" />
                                                            <input type="submit" name="submit" value="add"
                                                                class="button" />
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </div>

    </div>
    <!-- //top-brands -->
    <!-- fresh-vegetables -->
    <div class="fresh-vegetables">
        <div class="container">
            <h3>Top products</h3>
            <div class="w3l_fresh_vegetables_grids">
                <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
                    <div class="w3l_fresh_vegetables_grid2">
                        <ul>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">All Brands</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Vegetables</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="vegetables.html">Fruits</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="drinks.html">Juices</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="pet.html">Pet Food</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="bread.html">Bread & Bakery</a>
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="household.html">Cleaning</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Spices</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dry Fruits</a></li>
                            <li><i class="fa fa-check" aria-hidden="true"></i><a href="products.html">Dairy Products</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 w3l_fresh_vegetables_grid_right">
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="tema/images/8.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <div class="w3l_fresh_vegetables_grid1_rel">
                                <img src="tema/images/7.jpg" alt=" " class="img-responsive" />
                                <div class="w3l_fresh_vegetables_grid1_rel_pos">
                                    <div class="more m1">
                                        <a href="products.html" class="button--saqui button--round-l button--text-thick"
                                            data-text="Shop now">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="tema/images/10.jpg" alt=" " class="img-responsive" />
                            <div class="w3l_fresh_vegetables_grid1_bottom_pos">
                                <h5>Special Offers</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 w3l_fresh_vegetables_grid">
                        <div class="w3l_fresh_vegetables_grid1">
                            <img src="tema/images/9.jpg" alt=" " class="img-responsive" />
                        </div>
                        <div class="w3l_fresh_vegetables_grid1_bottom">
                            <img src="tema/images/11.jpg" alt=" " class="img-responsive" />
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="agileinfo_move_text">
                        <div class="agileinfo_marquee">
                            <h4>get <span class="blink_me">25% off</span> on first order and also get gift voucher</h4>
                        </div>
                        <div class="agileinfo_breaking_news">
                            <span> </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //fresh-vegetables -->
@endsection
