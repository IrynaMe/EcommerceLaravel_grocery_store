{{-- // include('config.php');
// // if(!isset($_COOKIE["email_log"])){
// //     header('location: index.php');
// //    } --}}

@include('amministrazione/header')


<div class="container-fluid" style="margin-top:50px">
    <div class="row">
        <div class="col-4">
            @include('amministrazione/menu')
        </div>
        <div class="col-8">

            <br>
            <table class="table table-responsive table-hover table-striped table-bordered ">
                <thead>
                    <tr class="text-center">
                        <th scope="col">id ordine</th>
                        <th scope="col">Creato</th>
                        <th scope="col">Tot Ordine</th>
                        <th scope="col">Stato</th>
                        <th scope="col">Indirizzo Spedizione</th>
                        <th scope="col">Citta</th>
                        <th scope="col">Email Cliente</th>
                        <th scope="col">Dettagli</th>
                        <th scope="col">Modifica</th>
                        <th scope="col">Cancella</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>

                            <td scope="col">{{ $order->id }}</td>
                            <td scope="col">{{ $order->created_at }}</td>
                            <td scope="col">{{ $order->prezzo }}</td>
                            <td scope="col">{{ $order->stato }}</td>
                            <td scope="col">{{ $order->indirizzo }}</td>
                            <td scope="col">{{ $order->citta }}</td>
                            <td scope="col">{{ $order->nome }}</td>
                            <td scope="col">
                                <a href="#">
                                    <i class="fas fa-info"></i>
                                </a>
                            </td>

                            <td scope="col">
                                <a href="#">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>

                            <td scope="col">
                                <a href="#">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{ $orders->links() }}
                    </div>
                </tbody>
            </table>
        </div>
        @include('amministrazione/footer')
