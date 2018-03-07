@extends ('layouts.master')
@section ('content')
    <div class="container">
        <h3 class="pt-3">{{ $category }}</h3>

        <div class="my-3 p-3 bg-white rounded box-shadow">
            <?php $counter = 0 ?>
            @foreach ($products as $p)
                <?php
                    $counter++;
                    if ($counter < count($products)) {
                        echo "<div class='row productline'>";
                    } else {
                        echo "<div class='row lastline'>";
                    }
                    ?>
                    <div class="col-md-4">
                        <a href="../product/{{ $p->id }}">
                            <img src="{{ $p->image }}" style="max-height: 200px">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <h4><a class="text-dark" href="../product/{{ $p->id }}">{{ $p->name }}</a></h4>
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