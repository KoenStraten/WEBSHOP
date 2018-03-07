@extends ('layouts.master')
@section ('content')

    <body>
    <div class="container">
        <h3 class="pt-3">Home</h3>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-sm-4">
                            <div class="product">
                                <h2>{{ $product->name }}</h2>
                                <p>{{ $product->description }}</p>
                                <a href={{ url('product/' . $product->id ) }}>{{ __('Bestel') }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </body>
    <!-- scripts  -->

@endsection