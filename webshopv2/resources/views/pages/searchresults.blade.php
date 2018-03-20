@extends ('layouts.master')
@section ('content')
    <div class="container">
        <h3>Search results</h3>
        <p>You searched on '{{ $query }}'</p>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            @if(count($searchProductResults) > 0)
                <h4>Products</h4>
                @foreach ($searchProductResults as $product)
                    @if (!$loop->last)
                        <div class="row productline">
                            @else
                                <div class="row lastline">
                                    @endif
                                    <div class="col-md-4">
                                        <a href="../product/{{ $product->id }}">
                                            <img src="{{ $product->image }}" style="max-height: 200px">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <h4><a class="text-dark"
                                               href="../product/{{ $product->id }}">{{ $product->name }}</a>
                                        </h4>
                                        <p>{{ $product->description  }} <br><br>
                                            @for($i = 0; $i < 5; $i++)
                                                @if($i < $product->rating())
                                                    <span class="fa fa-star checked"></span>
                                                @else
                                                    <span class="fa fa-star unchecked"></span>
                                                @endif
                                            @endfor
                                            <span class="card-text">{{ " ( " . count($product->reviews) . " )" }}</span>
                                    </div>
                                    <div class="col-md-2">
                                        <p class="price">{{ "$" . $product->price }}</p>
                                        <a href="../product/{{ $product->id }}"
                                           class="btn btn-warning">To product
                                            page ></a>
                                        <a href="../product/{{ $product->id }}" class="btn btn-warning mt-3">Add to
                                            shopping
                                            cart</a>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                    <p>There are no results that match your search</p>
                                @endif
                        </div>
        </div>
@endsection