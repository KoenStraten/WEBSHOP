@extends ('layouts.master')
@section ('content')

    <div class="container">
        <h3>Shopping cart</h3>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            @if(count($cart->products) > 0)
                @foreach ($cart->products as $product)
                    <div class="row productline">
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
                <div class="row lastline">
                    <div class="col-md-4 offset-6">
                        <p class="pt-3 price">Total price:</p>
                    </div>
                    <div class="col-md-2">
                        <p class="pt-3 price">{{" $" . $cart->total_cost }}</p>
                        <form method="POST" action="../shoppingcart/purchase/">
                            <input type="hidden" name="product" value="{{ $cart->id }}">
                            <button type="submit" class="btn btn-block btn-warning">Purchase</button>
                        </form>
                    </div>
                </div>
            @else
                <p>You have no items in your shopping cart</p>
            @endif
        </div>
    </div>
@endsection