shop,blade.php, deve contenere tutti i prodotti, mostrati 6 per ogni pagina

step1 : TemaController.php
//nle caso si utilizzi per le query i models
//specifico i models che uso
use App\Models\Customer;
use App\Models\Product;

Poi nella funzione 
  public function shop()
    {
        $products= Product::All();
        $products= Product::paginate(6);
        return view('front.shop')->with('products', $products);
    }
    
Cosi ottengo tutti i prodotti, impaginatoi 6 per pcntl_async_signals

2 step 
shop.blade.php
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
                                                <a href=" ">
                                                    <h4> {{ $product->name }}</h4>






                                                    <img title=" " alt=" " src="tema/{{ $product->image }}" />
                                                </a>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        @if ($product->discount > 0)
                                                            <p><del style="font-size:12px;color:gray;">
                                                                    {{ $product->price }} €
                                                                    <p style="margin-top:-15px">
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
                                                </div>

                                                </p>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div
                                                class="snipcart-details 
                                            top_brand_home_details">
                                                <form action="index.php" method="post">
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
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
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
            
            <div class="d-flex justify-content-center">
            {!! $products->links() !!}

            </div>
        </div>
    </div>
@endsection

da notare i prodotti che sono ripetuti per ogni riga del DB, attraverso l'istruzione 
@foreach
@endforeach
E dove ho inserito delle istruzioni del tipo {{ $product->name }} che mostra il valore nel del campo nome

{!! $products->links() !!} Per mostrare i links di pagination