@extends('front.layout')
@section('content')
    @if (Session::has('status'))
        <div class="alert alert-secondary">
            <h3> {{ Session::get('status') }}</h3>

            {{ Session::put('status', null) }}
        </div>
    @endif
    <!-- about -->
    <div class="privacy about">
        <h3>Chec<span>kout</span></h3>

        <div class="checkout-right">
            <h4>Your shopping cart contains: <span>
                    {{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}

                    Products
                </span></h4>
            <table class="timetable_sub">
                <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Product</th>
                        <th>Quality</th>
                        <th>Product Name</th>

                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>

                    @if (Session::has('cart'))
                        @foreach ($products as $product)
                            <tr class="rem1">
                                <td class="invert">1</td>
                                <td class="invert-image">

                                    <a href="/{id}"><img src="/tema/{{ $product['product_image'] }}" alt=" "
                                            class="img-responsive"></a>
                                </td>
                                {{-- <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value"><span>1</span></div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td> --}}

                                <form action="{{ url('/update_qty/' . $product['product_id']) }}" method="POST">
                                    @csrf
                                    <td class="quantity">
                                        <div class="input-group ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" name="quantity"
                                                        class="quantity form-control input-number"
                                                        value="{{ $product['qty'] }}" min="1" max="80">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="submit" class="btn btn-success" value="Aggiorna Qta"
                                                        min="1" max="80">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </form>
                                <td class="invert">{{ $product['product_name'] }}</td>

                                <td class="invert">
                                    @if ($product['product_discount'] > 0)
                                        {{ $product['product_discount'] }}
                                        </h4>
                                    @else
                                        {{ $product['product_price'] }}
                                    @endif

                                </td>
                                <td class="invert">
                                    <div class="rem">
                                        <a href="{{ url('/remove/' . $product['product_id']) }}">
                                            <div class="close1"> </div>
                                        </a>
                                    </div>

                                </td>

                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
        <div class="checkout-left">
            <div class="col-md-4 checkout-left-basket">
                <h4>Continue to basket</h4>
                <ul>
                    @if (Session::has('cart'))
                        <table class="table text-center">
                            <th class="text-center">Nome </th>
                            <th>Quantità</th>

                            <th>Valore Totale</th>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product['product_name'] }}</td>



                                    <td>{{ $product['qty'] }}</td>

                                    <?php
                                    if ($product['product_discount'] > 0) {
                                        $price = $product['product_discount'];
                                    } else {
                                        $price = $product['product_price'];
                                    }
                                    
                                    ?>
                                    <td class="total">{{ $product['qty'] * $price }}
                                        <?php
                                        $total = $product['qty'] * $price;
                                        
                                        ?>

                                    </td>

                                </tr>
                            @endforeach
                            {{-- <tr>

                                <span>{{ Session::has('cart') ? Session::get('cart')->totalPrice : null }}</span>
                            </tr> --}}

                            <tr>
                                <td>
                                    <span class="total">Prezzo Totale </span>
                                </td>
                                <td></td>
                                <td>
                                    <span class="total">
                                        {{ Session::get('cart')->totalPrice }}
                                    </span>
                                </td>
                            </tr>
                        </table>
                    @endif
                </ul>


            </div>

        </div>
        <!-- //about -->
    </div>
    <div class="clearfix"></div>
    </div>
    <!-- //banner -->

@endsection
