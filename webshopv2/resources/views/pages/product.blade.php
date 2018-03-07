@extends ('layouts.master')
@section ('content')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <img style="max-height:500px;"
                     src="{{ $product->image }}"
                     class="image-responsive" alt="Kaas">
            </div>
            <div class="col-md-4">
                <div class="card mb-1">
                    <div class="card-body">
                        <h2 class="card-title">{{ $product->name }}</h2>
                        <br>
                        <h5 class="card-subtitle mb-2 text-muted">Description</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <h5 class="card-subtitle mb-2 text-muted">Category</h5>
                        <p class="card-text">{{ $product->category }}</p>
                        <h5 class="card-subtitle mb-2 text-muted">Price</h5>
                        <p class="card-text price">${{ $product->price }}</p>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class='fa fa-star unchecked'></span>
                            <span class='fa fa-star unchecked'></span>
                        </div>
                        <div class="col-md-3">
                            <select class="">
                                <option>Jong</option>
                                <option>Jong belegen</option>
                                <option>Belegen</option>
                                <option>Extra belegen</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <input type="number" value="1">
                        </div>
                        <button class="btn btn-block btn-warning">Add to shopping cart</button>
                    </div>
                </div>
            </div>

        </div>

        <h3 class="pt-3">Reviews</h3>

        <h3 class="pt-3 pb-3">Specifications</h3>
        <!-- scripts  -->
    </div>

@endsection