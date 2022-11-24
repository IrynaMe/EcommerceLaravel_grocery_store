<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h3 class="display-4" style="text-align: center">Hai ricevuto una richiesta da <b>{{ $data['name'] }}</b>
                </h3>
                <br><br>
                <div class="container">
                    <div class="row">
                        <div class="col" style="border:1px solid black;padding:30px;">
                            <p class="lead">La sua mail è {{ $data['email'] }}</p>
                            <p>Oggetto: <b>{{ $data['subject'] }}</b></p>
                        </div>
                        <div class="col" style="border:1px solid black;padding:30px">
                            <h4><b>Messaggio:</b> {{ $data['message'] }}</h4>
                        </div>
                    </div>
                    <br><br>
                    <h2 style="text-align:center">E' urgente rispondere</h2>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
