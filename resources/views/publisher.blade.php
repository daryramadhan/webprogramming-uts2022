@extends('layouts.main')

@section('content')
    <div class="back-btn mb-4">
        <a href="/index">Back</a>
    </div>
    {{-- publisher area --}}
    <div class="border rounded-lg">
        <div class="card-body">
            <p class="publisher-name">Morning Publisher</p>
            <p class="publisher-address">Jl. Selat Karimata Selatan A-11B, Sulawesi</p>
            <p class="publisher-phone">081271511261</p>
            <p class="publisher-email">morningpublisher@gmail.com</p>
        </div>
    </div>

    {{-- card section --}}
    <div class="card-deck md-100 mt-4">
        {{-- card-1 --}}
        <div class="card col-6 col-md-4">
            <img src="https://buatlogoonline.com/wp-content/uploads/2020/08/cetak-4-1024x1024.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Manusia Kura-kura</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/detail" class="btn btn-primary">Lihat detail</a>
            </div>
        </div>
        {{-- card-2 --}}
        <div class="card col-6 col-md-4">
            <img src="https://buatlogoonline.com/wp-content/uploads/2020/08/cetak-4-1024x1024.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Penegak Negeri</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Lihat detail</a>
            </div>
        </div>
        {{-- card 3 --}}
        <div class="card col-6 col-md-4">
            <div class="m-0">
                <img src="https://buatlogoonline.com/wp-content/uploads/2020/08/cetak-4-1024x1024.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title">Pemuja Rahasia</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Lihat detail</a>
            </div>
        </div>
        {{-- card 4 --}}
        <div class="card col-6 col-md-4">
            <img src="https://buatlogoonline.com/wp-content/uploads/2020/08/cetak-4-1024x1024.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kumpulan Hewan Karnivora</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Lihat detail</a>
            </div>
        </div>
    </div>
@endsection
