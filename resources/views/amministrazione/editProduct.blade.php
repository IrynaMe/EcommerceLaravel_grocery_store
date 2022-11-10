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
                        <div class="col-4 offset-2 mb-3">
                             <label for="exampleFormControlInput1" class="form-label">Nome del Prodotto</label>
                        </div>
                        <div class="col-4 mb-3">
                            <input type="text" value="{{ $product->name }}" name="nameUpdate" id="name">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                        </div>

                    </div>
                        
                    <div class="row">
                        <div class="col-4 offset-2 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Descrizione</label>
                        </div>
                        <div class="col-4 mb-3">
                           <input type="text" value="{{ $product->description }}" name="descriptionUpdate" id="description">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-4 offset-2 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
                        </div>
                        <div class="col-4 mb-3">
                            <input type="text" value="{{ $product->price }}" name="priceUpdate" id="price">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-4 offset-2 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Sconto</label>
                        </div>
                        <div class="col-4 mb-3">
                            <input type="text" value="{{ $product->discount }}" name="discountUpdate" id="discount">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-4 offset-2 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Categoria</label>
                            <input type="text" name= "setCategory" value="<?php
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
                        </div>
                        <div class="col-4 mb-3">
                           {{-- <input type="text" value="{{ $product->category }}" name="categoryUpdate" id="category"> --}}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    
                    <select name="categoryUpdate" id="category" >
                        <option value="1">Vegetali</option>
                        <option value="2">Beveraggi</option>
                        <option value="3">Frutta</option>
                        <option value="5">Aperitivi</option>
                        <option value="6">Dolci</option>
                        <option value="8">Pane</option>
                    </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-4 offset-2 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Immagine</label>
                            <img style="height: 80px;" src="../../tema/{{ $product->image}} " alt="{{ $product->name }}">
                        </div>
                        <div class="col-4 mb-3 mt-4">
                            
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            {{-- <input type="hidden" value="{{ $product->image }}" name="imageDefault" id="imageDefault"
                                 class="form-control form-control-sm">  --}}
                            <input name="imageUpdate" id="imageUpdate"
                                type="file" class="form-control form-control-sm"
                                aria-describedby="upload" > 
                        </div>

                    </div>




        </div>
                <input type="submit" value="Invia  modifica" class="btn btn-success">
            </div>
            </form>

        </div>
    </div>
    @include('amministrazione/footer')