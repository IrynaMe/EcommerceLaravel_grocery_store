

<div class="container" 
style="margin-top:40px;text-align:center;width:100px">
    {{-- <img src="../images/logo.png" 
    class="img-fluid" alt="Responsive image"> --}}
</div>
<br>
<div class="global-container">
    <div class="card login-form">
        <div class="card-body">
            <h3 class="card-title text-center">
            Log ecommerce </h3>
            <div class="card-text">
                <!--
			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                <form onsubmit="return checkForm_log(this);" 
                action="#" method="post">
                @csrf
                    <!-- to error: add class "has-danger" -->
                    <div class="form-group">
                        <label for="email_log">Indirizzo Email</label>
                        <input type="email" 
                        class="form-control form-control-sm" 
                        id="email_log" name="email_log">
                    </div>
                    <div class="form-group">
                        <label for="psw_log">Password</label>

                        <input type="password" 
                        class="form-control form-control-sm" 
                        id="psw_log" name="psw_log">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" 
                        class="form-check-input" 
                        onclick="mostraPswlog()">
                        <label class="form-check-label" 
                        for="exampleCheck1">
                        Mostra Password</label>
                    </div>
                    <button type="submit" 
                    class="btn btn-primary btn-block">Invia</button>
                </form>
            </div>
            <div class="messaggio">
                <strong>
                   
                </strong>
            </div>
        </div>
    </div>
</div>