<div class="container" style="margin-top:40px;text-align:center;">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    @if (Session::has('status'))
        <div class="alert alert-primary" role="alert">
            {{ Session::get('status') }}
            {{ Session::put('status', null) }}
        </div>
    @endif

    <br>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">
                    Log ecommerce Admin</h3>

                <div class="card-text">
                    <form onsubmit="return checkForm_log(this);" action="/loginAmmre" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email_log">Indirizzo Email</label>
                            <input type="email" class="form-control form-control-sm" id="email_log" name="email">
                        </div>
                        <div class="form-group">
                            <label for="psw_log">Password</label>

                            <input type="password" class="form-control form-control-sm" id="psw_log" name="password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" onclick="mostraPswlog()">
                            <label class="form-check-label" for="exampleCheck1">
                                Mostra Password</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Invia</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
