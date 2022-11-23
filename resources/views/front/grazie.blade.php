@extends('front.layout')
@section('content')
    <div class="products-breadcrumb">
        <div class="container-fluid">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i>
                    <a href="index.php">Home</a>
                    <span>|</span>
                </li>
                <li>Grazie</li>
            </ul>
        </div>
    </div>

    <div class="container" style="text-align:center">
        <img src="{{ url('tema/images/grazie.jpg') }}" alt="" width=40%">
        <br>
        <a href="/"><button class="btn btn-success btn-lg" style="margin-top:20px;margin-bottom:20px">Torna home
                page</button></a>
        <br>
    </div>
@endsection
