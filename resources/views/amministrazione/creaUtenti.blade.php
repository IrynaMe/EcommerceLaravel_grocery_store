@include('amministrazione/header')
<div class="container-fluid" style="margin-top:50px">

    <div class="row">
        <div class="col-md-2">
            @include('amministrazione/menu')
        </div>
        <div class="col-md-10">
            <div class="alert alert-primary" role="alert">
                @if (Session::has('success'))

                    {{ Session::get('success') }}
                    {{ Session::put('success', null) }}

                @endif
            </div>
            @include('amministrazione/form_user')
        </div>
    </div>
    @include('amministrazione/footer')
