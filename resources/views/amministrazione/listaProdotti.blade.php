{{-- // if(!isset($_COOKIE["email_log"])){
//     header('location: index.php');
//    } --}}
@include('amministrazione/header')

<div class="container-fluid" style="margin-top:50px">
    <div class="row">
        <div class="col-md-2">
            @include('amministrazione/menu')
        </div>
        <div class="col-md-8 offset-md-1">
            <div class="alert alert-primary" role="alert">
                @if (Session::has('success'))
                    {{ Session::get('success') }}
                    {{ Session::put('success', null) }}
                @endif
            </div>
            <br>
            <br>
            <table class="table table-responsive table-hover table-striped table-bordered ">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Sconto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Modifica</th>
                        <th scope="col">Cancella</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr class="text-center">
                            <td scope="col">{{ $product->name }}</td>
                            <td scope="col">{{ $product->description}}</td>
                            <td scope="col">{{ $product->price}}</td>
                            <td scope="col">{{ $product->discount}}</td>
                            <td scope="col">
                                @switch($product->category)
                                @case('1')
                                    <span >Vegetali</span>
                                    @break
                                @case('2')
                                    <span >Beveraggi</span>
                                    @break
                                @case('3')
                                    <span >Frutta</span>
                                    @break
                                @case('5')
                                    <span >Aperitivi</span>
                                    @break
                                @case('6')
                                    <span >Dolci</span>
                                    @break
                                @case('8')
                                    <span >Pane</span>
                                    @break
                                @default
                                    <span >Non definita</span>
                                @endswitch
                                
                            </td>

                            {{-- <td scope="col">{{ $product->image}}</td> --}}
                            <td>
                                <img style="height: 100px;" src="tema/{{ $product->image }}" alt="{{ $product->name }}">
                            </td>

                            <td scope="col">
                                <a href="/editProduct/{{ $product->id }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>

                            <td scope="col">
                                <a href="/deleteProduct/{{ $product->id }}">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>

                   </tr> 
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{ $products->links() }} 
                    </div>
                   


        </div>

        </tbody>
        </table>
        <div class="d-flex justify-content-center">
           {!! $products->links() !!} 

        </div>
    </div>

    @include('amministrazione/footer')
