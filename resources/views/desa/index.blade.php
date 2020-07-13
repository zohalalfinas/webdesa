@extends('layouts.app')

@section('content')
<main>
        <!-- About US Start -->
        <div class="about-area">
            <div class="container mt-5">
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                                    <div class="about-right mb-90">
                                        <div class="about-img">
                                            <img src="{{asset('aznews/assets/img/post/about_heor.jpg')}}" alt="">
                                        </div>
                                        <div class="section-tittle mb-30 pt-30">
                                            <h3>Sejarah</h3>
                                        </div>
                                        <div class="about-prea">
                                            <p class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                                            <p class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                                            <p class="about-pera1 mb-25">
                                                My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.
                                                the refractor telescope uses a convex lens to focus the light on the eyepiece.
                                                The reflector telescope has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see.
                                                Collimation is a term for how well tuned the telescope is to give you a good clear image of what you are looking at. You want your telescope to have good collimation so you are not getting a false image of the celestial body.
                                                Aperture is a fancy word for how big the lens of your telescope is. But it’s an important word because the aperture of the lens is the key to how powerful your telescope is. Magnification has nothing to do with it, its all in the aperture.
                                                Focuser is the housing that keeps the eyepiece of the telescope, or what you will look through, in place. The focuser has to be stable and in good repair for you to have an image you can rely on.
                                                Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                                                Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                                        </div>
                                    </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-40">
                                <h3>Follow Us</h3>
                            </div>
                            <!-- Flow Socail -->
                            <div class="single-follow mb-45">
                                <div class="single-box">
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('aznews/assets/img/news/icon-fb.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">  
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div> 
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('aznews/assets/img/news/icon-tw.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                        <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('aznews/assets/img/news/icon-ins.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('aznews/assets/img/news/icon-yo.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Poster -->
                            <!-- <div class="news-poster d-none d-lg-block">
                                <img src="{{asset('aznews/assets/img/news/news_card.jpg')}}" alt="">
                            </div> -->
                            <div class="section-tittle mb-40">
                                <h3>Aparatur desa</h3>
                            </div>
                            <aside class="container shadow">
                                <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                    </ol>
                                    <div  class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="{{asset('aznews/assets/img/gallery/1.png')}}" class="d-block w-100 rounded" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 style="color:white;">full name</h5>
                                            <p style="color:black;">Jabatan </p>
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="{{asset('aznews/assets/img/gallery/2.png')}}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 style="color:white;"> full name</h5>
                                            <p style="color:black;">Jabatan</p>
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="{{asset('aznews/assets/img/gallery/3.png')}}" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5 style="color:white;">full name</h5>
                                            <p style="color:black;">Jabatan</p>
                                        </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </aside>
                        </div>
                   </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

@endsection