@extends ('layouts.master')
@section ('content')

    <div class="container">
        <div class="row">
            <h3>{{ $product->name }}</h3>
        </div>

        <img style="float: left; height:200px;"
             src="{{ $product->image }}"
             class="img mr-3 mt-3" alt="Kaas"> <br>
        <h5>Description</h5>
        <p>{{ $product->description }}</p>
        <h5>Category</h5>
        <p>{{ $product->category }}</p>
        <h5>Price</h5>
        <p>${{ $product->price }}</p>

        <h3 class="pt-3">Reviews</h3>

        <h3 class="pt-3 pb-3">Specifications</h3>
        <!-- scripts  -->
    </div>

@endsection