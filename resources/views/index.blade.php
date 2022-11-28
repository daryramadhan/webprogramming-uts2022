{{-- navbar area --}}
@extends('layouts.main')

{{-- content --}}
@section('content')
    {{-- jumbotron --}}
    @include('partial.jumbotron')
    {{-- card --}}
    <div class="card-deck md-100">
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
