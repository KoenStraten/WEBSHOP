@extends ('layouts.master')
@section ('content')
    {{ Breadcrumbs::render('shoppingCart') }}

    <div class="container">
        <h3 class="pt-3">{{ $productInCart->name }}</h3>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <div class="row productline">
                <div class="col-md-4">
                    <a href="../product/{{ $productInCart->product->id }}">
                        <img src="{{ $productInCart->product->image }}" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-6">
                    <h4><a class="text-dark"
                           href="../product/{{ $productInCart->product->id }}">{{ $productInCart->product->name }}</a>
                    </h4>
                    <p>{{ "Smaak: " . $productInCart->cheese_type }}</p>
                    <p>{{ $productInCart->product->description  }} <br><br>
                        @for($i = 0; $i < 5; $i++)
                            @if($i < $productInCart->product->rating())
                                <span class="fa fa-star checked"></span>
                            @else
                                <span class="fa fa-star unchecked"></span>
                            @endif
                        @endfor
                        <span class="card-text">{{ " ( " . count($productInCart->product->reviews) . " )" }}</span>
                </div>
                <div class="col-md-2">
                    <p class="price">{{ "$" . $productInCart->product->price }}</p>
                    <form method="POST" action="../shoppingcart/remove/">
                        {{ csrf_field() }}
                        <input type="hidden" name="productInCart" value="{{ $productInCart->id }}">
                        <button type="submit" class="btn btn-block btn-warning">Verwijder</button>
                    </form>
                    <form method="POST" action="../shoppingcart/edit/">
                        {{ csrf_field() }}
                        <input type="hidden" name="productInCart" value="{{ $productInCart->id }}">
                        <button type="submit" class="btn btn-block btn-warning">Bewerk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection