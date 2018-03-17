@extends ('layouts.master')
@section ('content')

    <div class="container">
        <h3>Shopping cart</h3>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            <ul class="list-unstyled">
                @if(isset($productsInCart))
                    @foreach($productsInCart as $productInCart)
                        <li>{{ $productInCart->name }}</li>
                    @endforeach
            </ul>
            {{--<?php--}}
            {{--$pcounter = 0;--}}
            {{--$productCount = count($products);--}}
            {{--?>--}}
            {{--@foreach ($products as $p)--}}
            {{--<?php--}}
            {{--$pcounter++;--}}
            {{--if ($pcounter < $productCount) {--}}
            {{--echo "<div class='row productline'>";--}}
            {{--} else {--}}
            {{--echo "<div class='row lastline'>";--}}
            {{--}--}}
            {{--?>--}}
            {{--<div class="col-md-4">--}}
            {{--<a href="../product/{{ $p->id }}">--}}
            {{--<img src="{{ $p->image }}" style="max-height: 200px">--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--<div class="col-md-6">--}}
            {{--<h4><a class="text-dark" href="../product/{{ $p->id }}">{{ $p->name }}</a></h4>--}}
            {{--<p>{{ $p->description  }} <br><br>--}}
            {{--<?php--}}
            {{--$reviews = \App\Review::getAllById($p->id);--}}
            {{--$rating = \App\Product::getReviewScore($p->id);--}}
            {{--$counter = 0;--}}
            {{--while ($counter < $rating) {--}}
            {{--echo "<span class='fa fa-star checked'></span>";--}}
            {{--$counter++;--}}
            {{--}--}}
            {{--while ($counter < 5) {--}}
            {{--echo "<span class='fa fa-star unchecked'></span>";--}}
            {{--$counter++;--}}
            {{--}--}}
            {{--echo "<span class='card-text'> ( " . count($reviews) . " )</span>"--}}
            {{--?>--}}
            {{--</div>--}}
            {{--<div class="col-md-2">--}}
            {{--<p class="price">{{ "$" . $p->price }}</p>--}}
            {{--<a href="../product/{{ $p->id }}" class="btn btn-warning">To product page ></a>--}}
            {{--</div>--}}
            {{--@endforeach--}}
            @else
                <p>You have no products in your shopping cart</p>
            @endif
        </div>
    </div>
@endsection