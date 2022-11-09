@include('amministrazione/header')
<div class="container-fluid" style="margin-top:50px">
    <div class="row">
        <div class="col-md-2">
            @include('amministrazione/menu')

        </div>
        <div class="col-md-10 " style="text-align: center">
            <h3>Modifica nome del prodotto</h3>
            <hr>
            <form action="{{ url('/aggiornaProduct') }}" method="post">
                @csrf
                <p>
                    <input type="text" value="{{ $product->name }}" name="nameUpdate" id="name">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                </p>

                <p>
                    <input type="text" value="{{ $product->description }}" name="descriptionUpdate" id="description">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                </p>

                <input type="submit" value="Invia  modifica" class="btn btn-success">
            </form>

        </div>
    </div>
    @include('amministrazione/footer')