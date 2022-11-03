@include('amministrazione/header')
<div class="container-fluid" style="margin-top:50px">
    <div class="row">
        <div class="col-md-2">
            @include('amministrazione/menu')

        </div>
        <div class="col-md-10 " style="text-align: center">
            <h3>Modifica email Utente</h3>
            <hr>
            <form action="{{ url('/aggiornaCustomer') }}" method="post">
                @csrf
                <p>
                    <input type="text" value="{{ $customer->email }}" name="emailUpdate" id="email">
                    <input type="hidden" name="id" value="{{ $customer->id }}">
                </p>

                <input type="submit" value="Invia  modifica" class="btn btn-success">
            </form>

        </div>
    </div>
    @include('amministrazione/footer')
