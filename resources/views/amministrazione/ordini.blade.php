@if (Session::has('amminisratore'))
    @include('amministrazione/header')


    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-2">
                @include('amministrazione/menu')
            </div>
            <div class="col-10">

                <br>
                <table class="table table-responsive table-hover table-striped table-bordered ">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">ID ordine</th>
                            <th scope="col">Creato</th>
                            <th scope="col">Tot Prezzo</th>
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
                            @php
                                $creato = $order->created_at;
                                $timestamp = strtotime($creato);
                                $creato = date('d-m-Y', $timestamp);
                            @endphp
                            <tr>

                                <td scope="col">{{ $order->id }}</td>
                                <td scope="col">{{ $creato }}</td>
                                <td scope="col">{{ $order->prezzo }}</td>
                                <td scope="col">{{ $order->stato }}</td>
                                <td scope="col">{{ $order->indirizzo }}</td>
                                <td scope="col">{{ $order->citta }}</td>
                                <td scope="col">{{ $order->nome }}</td>

                                <td>

                                    <i class="fas fa-info-circle " data-bs-toggle="modal"
                                        data-bs-target="{{ '#ordine_' . $order->id }}">
                                    </i>
                                </td>

                                <td scope="col">
                                    <a href="#" style="text-decoration: none;">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>

                                <td scope="col">
                                    <a href="#" style="text-decoration: none;">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            {{-- inizio modal --}}
                            <div class="modal fade" id="{{ 'ordine_' . $order->id }}" tabindex="-1"
                                aria-labelledby="{{ 'ordine_' . $order->id }}Label" aria-hidden="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Dettaglio ordine</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        {{-- modal body --}}
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3"><b>Immagine</b></div>
                                                    <div class="col-md-3"><b>Prezzo €</b></div>
                                                    <div class="col-md-3"><b>Nome</b></div>
                                                    <div class="col-md-3"><b>Quantita'</b></div>
                                                    <hr>
                                                </div>
                                                {{-- mostro i dettagli dell'ordine --}}
                                                @foreach ($order->cart->items as $item)
                                                    <div class="row">

                                                        <div class="col-md-3">
                                                            <img src="{{ url('tema/' . $item['product_image']) }}"
                                                                alt="" style="width:30px;height:30px">
                                                        </div>
                                                        <div class="col-md-3">{{ $item['product_price'] }}</div>
                                                        <div class="col-md-3">{{ $item['product_name'] }}</div>
                                                        <div class="col-md-3" style="text-align:center">
                                                            {{ $item['qty'] }}</div>

                                                    </div>
                                                    <br>
                                                    <hr>
                                                @endforeach


                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- fine modale --}}
                            <div class="modal fade" id="{{ 'ordine_' . $order->id }}" tabindex="-1"
                                aria-labelledby="{{ 'ordine_' . $order->id }}Label" aria-hidden="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Dettaglio ordine</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        {{-- modal body --}}
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-3"><b>Immagine</b></div>
                                                    <div class="col-md-3"><b>Prezzo €</b></div>
                                                    <div class="col-md-3"><b>Nome</b></div>
                                                    <div class="col-md-3"><b>Quantita'</b></div>
                                                    <hr>
                                                </div>
                                                {{-- mostro i dettagli dell'ordine --}}
                                                @foreach ($order->cart->items as $item)
                                                    <div class="row">

                                                        <div class="col-md-3">
                                                            <img src="{{ url('tema/' . $item['product_image']) }}"
                                                                alt="" style="width:30px;height:30px">
                                                        </div>
                                                        <div class="col-md-3">{{ $item['product_price'] }}</div>
                                                        <div class="col-md-3">{{ $item['product_name'] }}</div>
                                                        <div class="col-md-3" style="text-align:center">
                                                            {{ $item['qty'] }}</div>

                                                    </div>
                                                    <br>
                                                    <hr>
                                                @endforeach


                                            </div>

                                        </div>

                                        <?php
                                        
                                        ?>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- fine modale --}}
                            {{-- fine modal --}}
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{ $orders->links() }}
                        </div>
                    </tbody>
                </table>
            </div>
            @include('amministrazione/footer')
        @else
            <a href="{{ url('/admin') }}">Login come admin</a>
@endif
