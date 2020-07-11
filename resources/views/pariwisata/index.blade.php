@extends('layouts.app')

@section('content')
<main>
    <!-- Start Youtube -->
    <div class="youtube-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        @foreach ($data as $link)
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/{{trim($link->youtube, 'https://www.youtube.com/watch?v=')}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-caption">
                            <div class="top-caption">
                                <span class="color1">Pariwisata</span>
                            </div>
                            <div class="bottom-caption">
                                <h2>Pantai watu ulo sumberejo</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testmonial-nav text-center">
                            @foreach ($data as $link)
                            <div class="single-video">
                                <iframe  src="https://www.youtube.com/embed/{{trim($link->youtube, 'https://www.youtube.com/watch?v=')}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>{{$link->nama}}</h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Start youtube -->
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($data as $pariwisata)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{asset('foto/event')}}/{{$pariwisata->foto}}" alt="">
                                <a href="{{url('pariwisata/detail' , $pariwisata->id_pariwisata)}}" class="blog_item_date">
                                    <p>Detail</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{url('pariwisata/detail')}}">
                                    <h2>{{$pariwisata->nama}}</h2>
                                </a>
                                <p>{{$pariwisata->deskripsi}}</p>
                                <ul class="blog-info-link">
                                    <li><a href="{{$pariwisata->lokasi}}"><i class="fa fa-user"></i> Lokasi</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="media post_item">
                                <img src="{{asset('aznews/assets/img/post/post_1.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="{{url('pariwisata/detail')}}">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>detailuary 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('aznews/assets/img/post/post_2.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="{{url('pariwisata/detail')}}">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('aznews/assets/img/post/post_3.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="{{url('pariwisata/detail')}}">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="{{asset('aznews/assets/img/post/post_4.png')}}" alt="post">
                                <div class="media-body">
                                    <a href="{{url('pariwisata/detail')}}">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        </aside>

                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

</main>


@endsection