
{{-- // include('config.php');
// // if(!isset($_COOKIE["email_log"])){
// //     header('location: index.php');
// //    } --}}

@include('amministrazione/header')


<div class="container-fluid" 
style="margin-top:50px">
    <div class="row">
        <div class="col-4">
            @include('amministrazione/menu')
        </div>
        <div class="col-8">
            
            <br>
            <table class="table table-responsive table-hover table-striped table-bordered " >
                <thead>
                    <tr class="text-center">
                        <th scope="col" >id ordine</th>
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
              
                </tbody>
            </table>
        </div>
        @include('amministrazione/footer')

 