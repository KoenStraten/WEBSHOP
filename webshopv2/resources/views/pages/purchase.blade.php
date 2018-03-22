@extends ('layouts.master')
@section ('content')
    <div class="container">
        <h3 class="pt-3">Afrekenen</h3>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            @foreach ($productsInCart as $productInCart)
                <div class="row">
                    <div class="col-md-6">
                        <h4><a class="text-dark"
                               href="../product/{{ $productInCart->product->id }}">{{ $productInCart->product->name }}</a>
                        </h4>
                        <p>{{ "Smaak: " . $productInCart->cheese_type }}</p>
                        <p>{{ $productInCart->product->description  }} <br><br>
                    </div>
                    <div class="col-md-2">
                        <p class="price">{{ "$" . $productInCart->product->price }}</p>
                        {{--<form method="POST" action="../shoppingcart/remove/">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<input type="hidden" name="productInCart" value="{{ $productInCart->id }}">--}}
                        {{--<button type="submit" class="btn btn-block btn-warning">Verwijder</button>--}}
                        {{--</form>--}}
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-3">
                    <h2>Totaal</h2>
                </div>
                <div class="col-6 offset-3">
                    <h2><b>${{ $productInCart->shoppingCart->total_cost }}</b></h2>
                </div>
            </div>
            <h4>Persoonsgegevens</h4>
            <h5>Naam</h5>
            <p>{{ $user->name }}</p>
            <h5>Adres</h5>
            <h4>{{ $user->adress->streetname }}</h4>
        </div>
    </div>
@endsection