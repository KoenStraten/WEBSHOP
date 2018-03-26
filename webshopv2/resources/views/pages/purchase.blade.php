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
            <div class="card">
                <div class="card-header">
                    <h4>Persoonsgegevens</h4>
                </div>
                <div class="card-body">
                    <div class="row pl-3">
                        <form>
                            <h5>Naam</h5>
                            <input type="text" value="{{ $user->name }}" class="mb-2"/>
                            <h5>Adres</h5>
                            <input type="text" value="{{ $user->adress->streetname }}" class="mb-2"/>
                            <h5>Stad</h5>
                            <input type="text" value="{{ $user->adress->city }}" class="mb-2"/>
                            <h5>Postcode</h5>
                            <input type="text" value="{{ $user->adress->zipcode }}" class="mb-2"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection