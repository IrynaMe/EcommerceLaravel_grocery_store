@include('amministrazione/header')
<div class="container-fluid" style="margin-top:50px">
    <div class="row">
        <div class="col-md-2">
            @include('amministrazione/menu')

        </div>
        <div class="col-md-10">
            @include('amministrazione/form_prodotto')
        </div>
    </div>
    @include('amministrazione/footer')
