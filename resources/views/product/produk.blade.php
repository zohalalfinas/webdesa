@extends('layouts.app')

@section('content')
<div class="container mt-5">
<div class="trending-bottom">
    <div class="section-tittle mb-30">
        <h3>Produk sumberejo</h3>
     </div>
    <div class="row">
        <div class="col-lg-4">
        <div class="single-bottom mb-35">
            <div class="trend-bottom-img mb-30">
                <img src="{{asset('aznews/assets/img/trending/trending_bottom1.jpg')}}" alt="">
                
            </div>
            <div class="trend-bottom-cap">
                <a href="">
                    <h5 style="label">lele goreng</h5>
                </a>
                <h4 class="cap"><a  href="{{url('produk/detail')}}">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
            <div class="single-bottom mb-35">
                <div class="trend-bottom-img mb-30">
                    <img src="{{asset('aznews/assets/img/trending/trending_bottom2.jpg')}}" alt="">
                </div>
                <div class="trend-bottom-cap">
                    <a href=""  >
                        <h5 style="label">lele goreng</h5>
                    </a>
                    <h4 class="cap"><a  href="{{url('produk/detail')}}">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                </div>
            </div>
        </div>
            <div class="col-lg-4">
                <div class="single-bottom mb-35">
                    <div class="trend-bottom-img mb-30">
                        <img src="{{asset('aznews/assets/img/trending/trending_bottom3.jpg')}}" alt="">
                    </div>
                    <div class="trend-bottom-cap">
                        <a href=""  >
                            <h5 style="label">lele goreng</h5>
                        </a>
                        <h4 class="cap"><a  href="{{ url('produk/detail')}}">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-bottom mb-35">
                    <div class="trend-bottom-img mb-30">
                        <img src="{{asset('aznews/assets/img/trending/trending_bottom3.jpg')}}" alt="">
                    </div>
                    <div class="trend-bottom-cap">
                        <a href=""  >
                            <h5 style="label">lele goreng</h5>
                        </a>
                        <h4 class="cap"><a  href="{{url('produk/detail')}}">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-bottom mb-35">
                    <div class="trend-bottom-img mb-30">
                        <img src="{{asset('aznews/assets/img/trending/trending_bottom3.jpg')}}" alt="">
                    </div>
                    <div class="trend-bottom-cap">
                        <a href=""  >
                            <h5 style="label">lele goreng</h5>
                        </a>
                        <h4 class="cap"><a  href="{{url('produk/detail')}}">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-bottom mb-35">
                    <div class="trend-bottom-img mb-30">
                        <img src="{{asset('aznews/assets/img/trending/trending_bottom3.jpg')}}" alt="">
                    </div>
                    <div class="trend-bottom-cap">
                        <a href=""  >
                            <h5 style="label">lele goreng</h5>
                        </a>
                        <h4 class="cap"><a  href="{{url('produk/detail')}}">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection