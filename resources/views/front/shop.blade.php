@extends('front.layout')
@section('content')
    <div class="top-brands">
        <div class="container">
            <div class="agile_top_brands_grids">
                @foreach ($products as $product)
                    {{-- test oer vedere che vengono visualizzati tutti i nome --}}
                    {{-- <h1> {{ $product->name }}</h1> --}}
                    {{-- copiato da home.blade.php --}}
                    <div class="col-md-3 top_brand_left" style="min-height:500px; width:280px">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid" style="height:440px">
                                <div class="tag"><img src="tema/Images/tag.png" alt=" " class="img-responsive" />
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
                                                        @if ($product->discount > 0)
                                                            <p><del style="font-size:12px;color:gray;">
                                                                    {{ $product->price }} €;
                                                                    <p style="margin-top:-15px">
                                                                        <b>
                                                                            scontato a:
                                                                            {{ $product->discount }} €;

                                                                        </b>
                                                                    </p>
                                                            </p>
                                                        @else
                                                            <br>
                                                            <b> prezzo:
                                                                {{ $product->price }}. €;</b>
                                                        @endif
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
                @endforeach
            </div>


        </div>

    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            {{-- //per mostrae i links --}}
            {!! $products->links() !!}

        </div>
    </div>
@endsection
