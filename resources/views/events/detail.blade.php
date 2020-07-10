@extends('layouts.app')

@section('content')

<main>
  <div class="container mt-5 mb-5">
    <div class="card mx-auto mb-3" style="width: 40rem;">
        <img  src="{{asset('aznews/assets/img/trending/trending_bottom1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">uClass: Belajar Dasar Tahsin Al-Quran</h5>
            <span class="color2">Workshop</span>
            <div class="row mt-3">
            <div class="col border">
                <p>Diselenggarakan oleh :</p>
                <img style="border-raidus:50%; width:100px;" src="{{asset('aznews/assets/img/trending/trending_bottom1.jpg')}}" alt="">
              </div>
              <div class="col border">
                <p>Tanggal & waktu :</p>
                <p>11 Jul 2020 - 11 Jul 2020</p>
                <p>13:00 - 14:30 WIB</p>
              </div>
              <div class="col border">
                <p>lokasi :</p>
                <p>Event online</p>
              </div>
            </div>
            <h5 class="card-title mt-5">Deskripsi Event </h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia sapiente sit illum at assumenda voluptatum omnis enim vitae fuga! Minima, voluptatem sint tenetur ipsam recusandae saepe ea assumenda! Atque, ducimus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste est sit provident quaerat hic, ducimus dignissimos cupiditate nam iure dolor excepturi accusantium, dolorum natus tenetur, ad molestias voluptatibus eaque officiis!</p>
            <h5 class="card-title mt-5">Syarat dan ketentuan </h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis odit earum dolores dolore impedit, eos quasi esse? Laudantium deserunt asperiores qui, quod aperiam ullam eius, eum quam assumenda, veniam suscipit.
            </p>
        </div>
    </div>
  </div>
    
</main >
@endsection