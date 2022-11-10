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

                <input type="submit" value="Invia  modifica" class="btn btn-success">
            </div>
            </form>

        </div>
    </div>
    @include('amministrazione/footer')