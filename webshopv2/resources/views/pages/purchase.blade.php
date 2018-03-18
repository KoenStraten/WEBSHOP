@extends ('layouts.master')
@section ('content')
    <div class="container">
        <h3>Purchase</h3>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <p>Please check if all your information is correct</p>
            {{ $cart->id }}
            {{ $user->name }}
        </div>
    </div>

@endsection