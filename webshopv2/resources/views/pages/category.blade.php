@extends ('layouts.master')
@section ('content')
    <div class="container">
        <h3 class="pt-3">{{ $category }}</h3>

        <div class="my-3 p-3 bg-white rounded box-shadow">
            @foreach ($products as $p)
                <div class="row productline">
                    <div class="col-md-4">
                        <img src="{{ $p->image }}" style="max-height: 200px">
                    </div>
                    <div class="col-md-6">
                        <h4>{{ $p->name }}</h4>
                        <p>{{ $p->description  }}</p>
                    </div>
                    <div class="col-md-2">
                        <p class="price">{{ $p->price }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection