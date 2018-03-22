@extends ('layouts.master')
@section ('content')
    <div class="container">
        <h3>Afrekenen</h3>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <h4>Naam</h4>
            <p>{{ $user->name }}</p>
            <h4>Adres</h4>
            {{--<h4>{{ $user->adress() }}</h4>--}}
            @foreach ($productsInCart as $productInCart)

            @endforeach
        </div>
    </div>
@endsection