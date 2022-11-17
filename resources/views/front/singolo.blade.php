@extends('front.layout')
@section('content')
    <div class="container">
        <div class="agileinfo_single">

            <div class="col-md-4 agileinfo_single_left">

                <img style="width:450px;" title="{{ $product->name }}" alt="{{ $product->name }}"
                    src="{{ url('/tema/' . $product->image) }}" class="img-responsive" id="example" />
            </div>
            <div class="col-md-8 agileinfo_single_right">

                <div class="w3agile_description">
                    <h5>{{ $product->name }}</h5>
                    <h4>Descrizione :</h4>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        @if ($product->discount > 0)
                            <p><del style="font-size:12px;color:gray;">
                                    {{ $product->price }} €
                                    <br>
                                    <p>
                                        <b>
                                            scontato a:
                                            {{ $product->discount }} €;

                                        </b>
                                    </p>
                                @else
                                    <br>
                                    prezzo:
                                    {{ $product->price }}. €
                        @endif
                    </div>
                    <div class="snipcart-details
                            agileinfo_single_right_details">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="product_id" value=" {{ $product->id }}">
                                <input type="submit" name="submit" value="Acquista" class="button" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    @endsection
