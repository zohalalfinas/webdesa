@extends('layouts.app')

@section('content')
<main>
    <div class="section-top-border mb-5">
        <div class="container">
            <center>
                <h3 class="" style="">Jumlah terpapar Covid-19 Kota Jember</h3>
                <div class="border-bottom mt-3"></div>
            </center>
            <center>
            <div class="row mt-5">
                <div style="height:100px; border-radius:10px;" class="col  ">
                    <h5 style=" " class="">Positif</h5>
                </div>
                <div style="height:100px; border-radius:10px;" class="col  ">
                    <h5 style=" " class="">Sembuh</h5>
                </div>
                <div style="height:100px; border-radius:10px;" class="col ">
                    <h5 style=" " class="">Meninggal dunia</h5>
                </div>
            </div>
            </center>
            <center>
            <div style="margin-top:-4%;" class="row">
                <div style="height:100px; border-radius:10px;" class="col bg-danger ">
                    <h1 style="color:white; " class="mt-4">{{ $grafik->positif }}</h1>
                </div>
                <div style="height:100px; border-radius:10px;" class="col bg-primary circle ">
                    <h1 style="color:white; " class="mt-4">{{ $grafik->sembuh }}</h1>
                </div>
                <div style="height:100px; border-radius:10px;" class="col bg-dark">
                    <h1 style="color:white; " class="mt-4">{{ $grafik->meninggal }}</h1>
                </div>
            </div>
            </center>
            
        </div>    
    </div>
    <div class="section-top-border mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <h3>Edukasi covid</h3>
                    <li><a href="{{url('covid')}}"><p>01. infografis edukasi covid-19</p> </a> </li>
                    <li><a href="{{url('covid/video')}}"><p>02. video edukasi covid-19</p> </a> </li>
                    <li><a href="{{url('covid/artikel')}}"><p>03. Artikel Edukasi COVID 19</p> </a> </li>
                </div>
                @yield('content-covid')
            </div>
        </div>    
    </div>
</main>
@endsection