@include('amministrazione/header')
<div class="container-fluid" style="margin-top:50px">
    <div class="row">
        <div class="col-md-2">
            @include('amministrazione/menu')

        </div>
        <div class="col-md-10 " style="text-align: center">
            <h3>Modifica il prodotto</h3>
            <hr>
            <form action="{{ url('/aggiornaProduct') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome del Prodotto</label>
                            <input type="text" value="{{ $product->name }}" name="nameUpdate" id="name">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                        </div>
                    </div>


                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
                        <input type="text" value="{{ $product->description }}" name="descriptionUpdate" id="description">
                        <input type="hidden" name="id" value="{{ $product->id }}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
                        <input type="text" value="{{ $product->price }}" name="priceUpdate" id="price">
                        <input type="hidden" name="id" value="{{ $product->id }}">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sconto</label>
                        <input type="text" value="{{ $product->discount }}" name="discountUpdate" id="discount">
                        <input type="hidden" name="id" value="{{ $product->id }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                    {{-- <input type="text" value="{{ $product->category }}" name="categoryUpdate" id="category"> --}}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="text" value="<?php
                        switch($product->category){
                        case 1:
                            echo "Vegetali";
                            break;
                        case 2:
                            echo "Beveraggi";
                            break;
                        case 3:
                            echo "Frutta";
                            break;
                        case 5:
                            echo "Aperitivi";
                            break;
                        case 6:
                            echo "Dolci";
                            break;
                        case 8:
                            echo "Pane";
                            break;
                        default:
                            echo "Non definita";}
                       ?>">
                    <select name="categoryUpdate" id="category">
                        <option value="1">Vegetali</option>
                        <option value="2">Beveraggi</option>
                        <option value="3">Frutta</option>
                        <option value="5">Aperitivi</option>
                        <option value="6">Dolci</option>
                        <option value="8">Pane</option>
                    </select>
                </div>
            </div>

{{--             <div class="row">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Immagine</label>
                    
                    <img src="tema/{{ $product->image }}" alt="{{ $product->name }}">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="text" value="{{ $product->image }}" name="imageUpdate" id="imageUpdate"
                         type="file" class="form-control form-control-sm"
                        aria-describedby="upload">
                    
                    

                </div>
            </div> --}}


                <input type="submit" value="Invia  modifica" class="btn btn-success">
            </div>
            </form>

        </div>
    </div>
    @include('amministrazione/footer')