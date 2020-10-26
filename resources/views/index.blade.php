@extends('layout/index')

@section('navbar')
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar-example2">
        <div class="container">
            <img src="../img/icon.png" class="icon-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
@endsection()

@section('MainFour') 
<div class="MainFour">
    <div class="container">
        <div class="row">
            <div class="col-7 text">
                <div class="textAll">
                    <h2>About Us </h2>
                    <p>Being a premier exhibition stand design company, We have a strong brand presence across
                        indonesia that ensures timely delivery of stands design in an exhibition without
                        compromising the quality. Get a customized exhibition stand design created exclusively
                        to
                        accommodate your requirements. Our experienced stand designers will create a mood board
                        based on your brief while considering your target audience, exhibition goals, marketing
                        strategy</p>
                </div>
            </div>
            <div class="col-5">
                <img src="./img/christina-wocintechchat-com-faEfWCdOKIg-unsplash.jpg" class="img-five">
            </div>
        </div>
    </div>
</div>
@endsection()

@section('footer')
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="./img/icon.png" alt="Logo Perusahaan" class="brandFooter">
            </div>
            <div class="col-5">
                <div class="row">

                    <div class="col">
                        <p>SUPPORT</p>
                        <p></p>
                        <p> acscsacas</p>
                        <p> acscsacas</p>
                        <p> acscsacas</p>
                    </div>
                    <div class="col">
                        <p> Help Centre</p>
                        <p>Tentang Kami</p>
                        <p> acscsacas</p>

                    </div>
                    <div class="col">
                        <p>Tentang Kami</p>
                        <p> assasa@saacscas.ocm</p>
                        <p> 018-878-8808</p>
                        <p>Sarinah BD floor 11 MH.Thamrin Street no.11 Jakarta Pusat Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="situs">
                <h2>Follow Us On
                </h2>
            </div>
        </div>

    </div>
</div>
@endsection()
