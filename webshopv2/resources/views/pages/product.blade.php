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
        <h3>
            <a class="text-dark" data-toggle="collapse" href="#multiCollapseExample1"
               role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Reviews v</a>
        </h3>

        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
            </div>
        </div>

        <br>

        <h3>
            <a class="text-dark" data-toggle="collapse" href="#multiCollapseExample2"
               role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Specifications v</a>
        </h3>

        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    @foreach ($specifications as $spec)
                        <div class="row">
                            <h6 class="col-md-4">{{ $spec->type  }}</h6>
                            <h6 class="col-md-4 text-muted">{{ ": " . $spec->answer }}</h6>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- scripts  -->
    </div>

@endsection