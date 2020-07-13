@extends('layouts.app')

@section('content')
<main>
    <aside>
        <div style="width:50%;" class="container">
            <div class="py-5 text-center">
                <img style="width:10%;" src="{{asset('aznews/assets/img/logo/pemkab.png')}}" alt="" class="d-block mx-auto mb-4">
                <h2>BUMDES</h2>
                <p>introduction about all product BUMDES Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, corporis obcaecati eligendi consequuntur earum autem </p>
                <div class="border-bottom"></div>
            </div>
        </div>
    </aside>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div style="background-color:transparent;border:none;" class="card mb-4 shadow-sm">
                        <img src="{{asset('aznews/assets/img/trending/trending_bottom3.jpg')}}" class="rounded mx-auto d-block mt-2 shadow-lg" alt="Responsive image">
                        <div class="card-body">
                            <center>
                                <h4 class="card-text">Nugget lele</h4>
                                <a href="{{url('produk/detail')}}">
                                    <button type="button" class="btn-custom">detail</button>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div style="background-color:transparent;border:none;" class="card mb-4 shadow-sm">
                        <img src="{{asset('aznews/assets/img/trending/trending_bottom3.jpg')}}" class="rounded mx-auto d-block mt-2 shadow-lg" alt="Responsive image">
                        <div class="card-body">
                            <center>
                                <h4 class="card-text">Nugget lele</h4>
                                <a href="{{url('produk/detail')}}">
                                    <button type="button" class="btn-custom">detail</button>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div style="background-color:transparent;border:none;" class="card mb-4 shadow-sm">
                        <img src="{{asset('aznews/assets/img/trending/trending_bottom3.jpg')}}" class="rounded mx-auto d-block mt-2 shadow-lg" alt="Responsive image">
                        <div class="card-body">
                            <center>
                                <h4 class="card-text">Nugget lele</h4>
                                <a href="{{url('produk/detail')}}">
                                    <button type="button" class="btn-custom">detail</button>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection