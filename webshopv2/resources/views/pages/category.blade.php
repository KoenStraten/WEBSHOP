@extends ('layouts.master')
@section ('content')
    <div class="container">
        <h3>{{ $category }}</h3>
        <div class="my-3 p-3 bg-white rounded box-shadow">
            @foreach ($products as $p)

                @if (!$loop->last)
                    <div class='row productline'>
                        @else
                            <div class='row lastline'>
                                @endif
                                <div class="col-md-4">
                                    <a href="../product/{{ $p->id }}">
                                        <img src="{{ $p->image }}" style="max-height: 200px">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <h4><a class="text-dark" href="../product/{{ $p->id }}">{{ $p->name }}</a></h4>
                                    <p>{{ $p->description  }} <br><br>
                                        @for($i = 0; $i < 5; $i++)
                                            @if($i < $p->rating())
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star unchecked"></span>
                                            @endif
                                        @endfor
                                        <span class="card-text">{{ " ( " . count($p->reviews) . " )" }}</span>
                                </div>
                                <div class="col-md-2">
                                    <p class="price">{{ "$" . $p->price }}</p>
                                    <a href="../product/{{ $p->id }}" class="btn btn-warning">Naar productpagina ></a>
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        <form class="pt-3" method="POST" action="../shoppingcart/store/">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="product" value="{{ $p->id }}">
                                            <button type="submit" class="btn btn-block btn-warning"><i
                                                        class="fas fa-plus"></i>
                                                In winkelwagen
                                            </button>
                                        </form>
                                    @else
                                        <button disabled class="mt-3 btn btn-block btn-warning">Log in</button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                    </div>
        </div>
@endsection