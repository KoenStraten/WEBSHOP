@extends ('layouts.master')
@section ('content')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
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
                            <span class="fa fa-star unchecked"></span>
                            <span class="fa fa-star unchecked"></span>

                        </div>
                        <div class="form-group">
                            <label>Cheese type</label>
                            <select class="form-control">
                                <option>Jong</option>
                                <option>Jong belegen</option>
                                <option>Belegen</option>
                                <option>Extra belegen</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Amount</label>
                            <input id="amount" type="number" value="1" class="form-control">
                        </div>
                        <button class="btn btn-block btn-warning">Add to shopping cart</button>
                    </div>
                </div>
            </div>

        </div>

        <div id="accordion">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Reviews
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        hi!
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Specifications
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        @foreach ($specifications as $spec)
                            <div class="row">
                                <h5 class="col-md-4">{{ $spec->type  }}</h5>
                                <h5 class="col-md-4 text-muted">{{ ": " . $spec->answer }}</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- scripts  -->
    </div>

@endsection