@extends ('layouts.master')
@section ('content')
    {{ Breadcrumbs::render('shoppingCartPurchase') }}

    <div class="container">
        @auth
            <h3 class="pt-3">Afrekenen</h3>
            <div class="row p-3 pb-5 text-left">
                <div class="card w-100">
                    <div class="card-header">Uw bestelling wordt bezorgd op {{ $deliveryDay }}</div>
                    <div class="card-body">
                        <form method="POST" action="../empty/">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <h5 class="col-md-3">Naam</h5>
                                <h5 class="col-md-3">{{ $user->name }}</h5>
                            </div>

                            <div class="form-group row">
                                <h5 class="col-md-3">Email adres</h5>
                                <h5 class="col-md-3">{{ $user->email }}</h5>
                            </div>

                            <div class="form-group row">
                                <h5 class="col-md-3">Straatnaam</h5>
                                <h5 class="col-md-3">{{ $user->adress->streetname }}</h5>
                            </div>

                            <div class="form-group row">
                                <h5 class="col-md-3">Huisnr</h5>
                                <h5 class="col-md-3">{{ $user->adress->housenumber }}</h5>
                            </div>

                            <div class="form-group row">
                                <h5 class="col-md-3">Postcode</h5>
                                <h5 class="col-md-3">{{ $user->adress->zipcode }}</h5>
                                <h5 class="col-md-3 text-right">Betaalwijze</h5>
                                <h5 class="col-md-3">
                                    <select name="payment">
                                        @foreach($paymentOptions as $payment)
                                            <option value="{{ $payment }}">{{ $payment }}</option>
                                        @endforeach
                                    </select>
                                </h5>
                            </div>

                            <div class="form-group row">
                                <h5 class="col-md-3">Stad</h5>
                                <h5 class="col-md-3">{{ $user->adress->city }}</h5>
                                <h5 class="col-md-3 text-right">Prijs</h5>
                                <h5 class="col-md-3">{{ $cart->total_cost }}</h5>
                            </div>
                            <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                            <button type="submit" class="btn btn-block btn-warning">
                                Bestellen
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endAuth
        @guest
            <div class="row p-3 mb-3 justify-content-center bg-white">
                <div class="col-md-6">
                    <h3>Al een account?</h3>
                    <button class="btn btn-primary">Log in</button>
                </div>
                <div class="col-md-6">
                    <h3>Nog geen account?</h3>
                    <button class="btn btn-primary">Registreren</button>
                </div>
            </div>
        @endguest
    </div>
@endsection