@extends('layouts.apps')

@section('content')
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong style="padding:11px 9px;">Kami sampaikan</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Selamat datang di website resmi desa sumberejo......</li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <!-- Trending Top -->
                        <div  class="trending-top mb-30 ml-10">
                            <div class="trend-top-img">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Eecr2TdZ4-s" allowfullscreen></iframe>
                                <!-- <img src="{{asset('aznews/assets/img/trending/trending_top.jpg')}}" alt=""> -->
                                </div>
                                <div class="trend-top-cap">
                                    <span>pariwisata</span>
                                    <h2><a href="{{ url('pariwisata') }}">Keindahan Pariwisata <br>di desa Sumberejo</a></h2>    
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom" >
                            <div class="section-tittle mb-30">
                                <h3>Produk sumberejo</h3>
                            </div>
                            <div class="row" >
                                <?php $i=200;
                                $a=0;?>
                                @foreach ($produk as $item)
                                <div class="col-md-4 mb-5" data-aos="zoom-in-down" data-aos-delay="<?=$a=$a+$i;?>">
                                    <div style="background-color:transparent;border:none;" class="card mb-4 shadow-sm">
                                        <div class="panel-body " style="max-height:100px;text-align:center;overflow:hidden;padding:0;">
                                            <img  src="{{asset('foto/produk')}}/{{$item->foto}}" class=" mx-auto d-block mt-2 " alt="Responsive image" width="50%">
                                        </div>
                                        <div class="card-body">
                                            <center>
                                                <h4 class="card-text">{{$item->judul}}</h4>
                                                <a href="{{url('item/detail' , $item->id_produk)}}">
                                                    <button type="button" class="btn-custom">Detail</button>
                                                </a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Trending Area End -->
    <!-- event start -->
    <div class="container-fluid">
        <div class="container">
            <div class="section-tittle mb-30">
                <h3>Event Desa</h3>
            </div>
            <!-- slick -->
            <div class="slicky">
            @foreach ($event as $item)
                <div class="col-md-3 col-sm-12" >
                    <div class="card mb-1">
                        <div class="" style="max-height:300px;overflow:hidden;">
                            <img src="{{asset('foto/event')}}/{{$item->foto}}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                        <h5 class="card-title">{{$item->nama}}</h5>
                        <div class="row">
                            <div class=".col-6 ml-3">
                                <p>Tanggal : </p>
                            </div>
                            <div class="col">
                                <p>{{$item->tgl}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class=".col-6  ml-3">
                                <p>Waktu : </p>
                            </div>
                            <div class="col">
                                <p>{{$item->waktu}}</p>
                            </div>
                        </div>
                        <a href="{{url('event')}}" class="btn-custom p-2 ">Lihat selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach   
            </div>
    </div>

    <!--  Recent Articles start -->
    <!-- <div class="recent-articles">
        <div class="container">
           <div class="recent-wrapper">
                section Tittle
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Event</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex">
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{asset('aznews/assets/img/news/recent1.jpg')}}" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{asset('aznews/assets/img/news/recent2.jpg')}}" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{asset('aznews/assets/img/news/recent3.jpg')}}" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="{{asset('aznews/assets/img/news/recent2.jpg')}}" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>            -->
    <!--Recent Articles End -->
   <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                        <div class="section-tittle mb-30">
                            <h3>Pencegahan Covid</h3>
                        </div>
                    
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"  data-aos="fade-right">           
                                <div class="whats-news-caption">
                                    <div class="row">
                                        @foreach ($artikel as $item)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{asset('foto/artikel')}}/{{$item->foto}}" alt="" style="object-fit: none;object-position: center;
                                                    width: 100%;max-height: 300px;margin-bottom: 1rem;">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">Artikel</span>
                                                    <h4><a href="{{url('covid/artikel/Lihat selengkapnya' , $item->id_artikel)}}">{{$item->judul}}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @foreach ($infografik as $item)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{asset('foto/infografik')}}/{{$item->foto}}" alt="" style="object-fit: none;object-position: center;
                                                    width: 100%;max-height: 300px;margin-bottom: 1rem;">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">infografik</span>
                                                    <h4><a href="{{url('covid')}}">{{$item->judul}}</a></h4>
                                                </div>
                                            </div>
                                        </div>              
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="zoom-out">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Data sebaran Covid</h3>
                </div>
                <!-- Flow Socail -->
                <div class="single-follow mb-45">
                    <div class="single-box" >
                        @foreach ($grafik as $item)
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                            </div>
                            <div class="follow-count">  
                                <span>{{ $item['positif'] }}</span>
                                <p>Positif</p>
                            </div>
                        </div> 
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>{{ $item['sembuh'] }}</span>
                                <p>Sembuh</p>
                            </div>
                        </div>
                            <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>{{ $item['meninggal'] }}</span>
                                <p>Meninggal</p>
                            </div>
                        </div>
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-social">
                                <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                            </div>
                            <div class="follow-count">
                                <span>{{ $item['positif'] }}</span>
                                <p>Aktif</p>
                            </div>
                        </div>
                                                    
                        @endforeach
                    </div>
                </div>
                <!-- New Poster -->
                <div class="news-poster d-none d-lg-block">
                    <img src="assets/img/news/news_card.jpg" alt="">
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
   
    </main>


@endsection