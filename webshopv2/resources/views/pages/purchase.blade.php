@extends ('layouts.master')
@section ('content')
    {{ Breadcrumbs::render('shoppingCartPurchase') }}

    <div class="container">
        <h3 class="pt-3">Afrekenen</h3>
        {{--<div class="my-3 p-3 bg-white rounded box-shadow">--}}
        {{--@foreach ($productsInCart as $productInCart)--}}
        {{--<div class="row border-bottom">--}}
        {{--<div class="col-md-6">--}}
        {{--<h4>--}}
        {{--<a class="text-dark"--}}
        {{--href="../product/{{ $productInCart->product->id }}">{{ $productInCart->product->name }}</a>--}}
        {{--</h4>--}}
        {{--<p>{{ "Smaak: " . $productInCart->cheese_type }}</p>--}}
        {{--<p>{{ $productInCart->product->description  }} <br><br>--}}
        {{--</div>--}}
        {{--<div class="col-md-3">--}}
        {{--<p class="price">{{ "$" . $productInCart->product->price }}</p>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--@endforeach--}}
        {{--<div class="row">--}}
        {{--<div class="col-3">--}}
        {{--<h2>Totaal</h2>--}}
        {{--</div>--}}
        <div class="col-6 offset-3">
            <h2><b>${{ $cart->total_cost }}</b></h2>
        </div>
        {{--</div>--}}
        {{--</div>--}}
        <div class="row p-3 justify-content-center">
            <div class="card w-100">
                <div class="card-header">Uw bestelling wordt bezorgd op</div>
                <div class="card-body">
                    <form method="POST" action="../empty/">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">Naam</label>
                            <label class="col-md-6 col-form-label">{{ $user->name }}</label>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">Straatnaam</label>
                            <label class="col-md-6 col-form-label">{{ $user->adress->streetname }}</label>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">Huisnr</label>
                            <label class="col-md-6 col-form-label">{{ $user->adress->housenumber }}</label>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">Postcode</label>
                            <label class="col-md-6 col-form-label">{{ $user->adress->zipcode }}</label>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 col-form-label text-md-right">Stad</label>
                            <label class="col-md-6 col-form-label">{{ $user->adress->city }}</label>
                        </div>
                        <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                        <button type="submit" class="btn btn-block">
                            Bestellen
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection