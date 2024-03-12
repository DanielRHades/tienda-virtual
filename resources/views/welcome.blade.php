    @extends('layouts.app')

    @section('content')

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/banner_black.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/banner_blue.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/banner_purple.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <h1 class="text-center m-5">Productos</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/miedito1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">La llorona</h5>
                      <p class="card-text">Da miedo</p>
                      <a href="#" class="btn btn-primary">Ver en cines</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/miedito1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">La llorona</h5>
                      <p class="card-text">Da miedo</p>
                      <a href="#" class="btn btn-primary">Ver en cines</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/miedito1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Chupa cabras</h5>
                      <p class="card-text">Da mas miedo.</p>
                      <a href="#" class="btn btn-primary">Ver en cines</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('images/miedito1.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Perro cobarde</h5>
                      <p class="card-text">Mucho miedo</p>
                      <a href="#" class="btn btn-primary">Ver en cines</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
