@extends ('layouts.master')
@section ('content')
    {{ Breadcrumbs::render('shoppingCartPurchase') }}

    <div class="container">
        @auth
        <h3 class="pt-3">Afrekenen</h3>
        <div class="col-6 offset-3">
            <h2><b>${{ $cart->total_cost }}</b></h2>
        </div>
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
        @endAuth
        @guest
            <div class="row p-3 mb-3 justify-content-center bg-white">
                <div class="col-md-6 p-5 border-right">
                    <h3>Al een account?</h3>
                    <p>Bent u al een bestaande klant? dat zijn wij zeer dankbaar! log wel eerst in om je producten te kunnen afrekenen.</p>
                    <form method="POST" action="/../login">
                        @csrf

                        <div class="form-group row">
                            <label for="name"
                                   class="col-sm-4 col-form-label text-md-right">{{ __('Gebruikersnaam') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="name"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="cart_id" value="{{ $cart->id }}">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Inloggen') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 p-5">
                    <h3>Nog geen account?</h3>
                    <p>Binnen een paar minuten heeft u uw product besteld!</p>
                    <a class="btn btn-primary" role="button" href="/../register">Registreren</a>
                </div>
            </div>
        @endguest
    </div>
@endsection