{{--@extends ('layouts.master')--}}
{{--@section ('content')--}}

{{--<div class="container">--}}
{{--<h3>Shopping cart</h3>--}}
{{--<div class="row mt-4">--}}

{{--@if(isset($cart))--}}
{{--@foreach($cart->products as $product)--}}
{{--<div class="col-md-8">--}}
{{--<div class="row justify-content-center">--}}
{{--<img src="{{ $product->image }}" class="image-responsive pic" alt="Kaas">--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="col-md-4">--}}
{{--<div class="card mb-1">--}}
{{--<div class="card-body">--}}
{{--<h2 class="card-title">{{ $product->name }}</h2>--}}
{{--<br>--}}
{{--<h5 class="card-subtitle mb-2 text-muted">Description</h5>--}}
{{--<p class="card-text">{{ $product->description }}</p>--}}
{{--<h5 class="card-subtitle mb-2 text-muted">Category</h5>--}}
{{--<p class="card-text">{{ $product->category }}</p>--}}
{{--<h5 class="card-subtitle mb-2 text-muted">Price</h5>--}}
{{--<p class="card-text price">${{ $product->price }}</p>--}}
{{--<div class="rating">--}}
{{--@for($i = 0; $i < 5; $i++)--}}
{{--@if($i < $product->rating())--}}
{{--<span class="fa fa-star checked"></span>--}}
{{--@else--}}
{{--<span class="fa fa-star unchecked"></span>--}}
{{--@endif--}}
{{--@endfor--}}
{{--<span class="card-text">{{ " ( " . count($product->reviews) . " )" }}</span>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--@else--}}
{{--<p>You have no products in your shopping cart</p>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends ('layouts.master')
@section ('content')

    <div class="container">
        <h3>Shopping cart</h3>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            @if(isset($cart))
                @foreach ($cart->products as $product)
                    @if (!$loop->last)
                        <div class="row productline">
                            @else
                                <div class="row lastline">
                                    @endif
                                    <div class="col-md-4">
                                        <a href="../product/{{ $product->id }}">
                                            <img src="{{ $product->image }}" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <h4><a class="text-dark"
                                               href="../product/{{ $product->id }}">{{ $product->name }}</a></h4>
                                        <p>{{ $product->description  }} <br><br>
                                            @for($i = 0; $i < 5; $i++)
                                                @if($i < $product->rating())
                                                    <span class="fa fa-star checked"></span>
                                                @else
                                                    <span class="fa fa-star unchecked"></span>
                                                @endif
                                            @endfor
                                            <span class="card-text">{{ " ( " . count($product->reviews) . " )" }}</span>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="price">{{ "$" . $product->price }}</p>
                                        <form method="POST" action="../shoppingcart/remove/">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="product" value="{{ $product->id }}">
                                            <button type="submit" class="btn btn-block btn-warning">Delete</button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                        </div>
                    @else
                        <p>You have no items in your shopping cart</p>
                    @endif
        </div>
    </div>
@endsection