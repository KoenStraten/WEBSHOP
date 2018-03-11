@extends ('layouts.master')
@section ('content')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8">
                <img style="max-height:500px;"
                     src="{{ $product->image }}"
                     class="image-responsive" alt="Kaas">
            </div>
            <div class="col-md-4">
                <div class="card mb-1">
                    <div class="card-body">
                        <h2 class="card-title">{{ $product->name }}</h2>
                        <br>
                        <h5 class="card-subtitle mb-2 text-muted">Description</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <h5 class="card-subtitle mb-2 text-muted">Category</h5>
                        <p class="card-text">{{ $product->category }}</p>
                        <h5 class="card-subtitle mb-2 text-muted">Price</h5>
                        <p class="card-text price">${{ $product->price }}</p>
                        <div class="rating">
                            <?php
                            $counter = 0;
                            while ($counter < $rating) {
                                echo "<span class='fa fa-star checked'></span>";
                                $counter++;
                            }
                            while ($counter < 5) {
                                echo "<span class='fa fa-star unchecked'></span>";
                                $counter++;
                            }
                            echo "<span class='card-text'> ( ". count($reviews) ." )</span>"
                            ?>

                        </div>
                        <form method="post" action="">
                            <div class="form-group">
                                <label>Cheese type</label>
                                <select name="cheeseType" class="form-control">
                                    <option>Jong</option>
                                    <option>Jong belegen</option>
                                    <option>Belegen</option>
                                    <option>Extra belegen</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Amount</label>
                                <input name="amount" id="amount" type="number" value="1" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-block btn-warning">Add to shopping cart</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <h3>
            <a class="text-dark" data-toggle="collapse" href="#multiCollapseExample1"
               role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Reviews v</a>
        </h3>

        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">

                    @if(\Illuminate\Support\Facades\Auth::check())
                    <div class="row productline">
                        <div class="col-md-10">
                            <h5>Plaats hier een review</h5>
                            <div class="row">
                                <form class="col-md-10" method="post" action="../postReview">
                                    {{ csrf_field() }}

                                    <div class="stars">
                                        <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>

                                        <label class="star star-5" for="star-5"></label>
                                        <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>

                                        <label class="star star-4" for="star-4"></label>
                                        <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>

                                        <label class="star star-3" for="star-3"></label>
                                        <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>

                                        <label class="star star-2" for="star-2"></label>
                                        <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>

                                        <label class="star star-1" for="star-1"></label>

                                    </div>

                                    <input class="form-control" name="titel" type="text" placeholder="Titel">
                                    <div class="form-space"></div>
                                    <textarea class="form-control" name="content" placeholder="Plaats hier uw opmerkingen"></textarea>
                                    <div class="form-space"></div>
                                    <input type="hidden" name="product" value="{{ $product->id }}">
                                    <input class="btn btn-primary" type="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif

                    @foreach ($reviews as $review)
                        <div class="row productline">
                            <div class="col-md-10">
                                <div class="row">
                                    <?php
                                    $rating = $review->rating;
                                    $counter = 0;
                                    while ($counter < $rating) {
                                        echo "<span class='fa fa-star checked'></span>";
                                        $counter++;
                                    }
                                    while ($counter < 5) {
                                        echo "<span class='fa fa-star unchecked'></span>";
                                        $counter++;
                                    }
                                    ?>
                                    <h5 class="col-md-6">{{ $review->title }}</h5>
                                </div>
                                <?php
                                    $user = DB::table('users')->find($review->user_id);
                                    $adress = DB::table('adresses')->find($user->adress_id);
                                    $date = date_format( $review->created_at, "j F Y");
                                    echo "<p class='col-md-10'>" . $user->name . " | " . $adress->city . " | " . $date . "</p>";
                                ?>
                                <p>{{ $review->text }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <br>

        <h3>
            <a class="text-dark" data-toggle="collapse" href="#multiCollapseExample2"
               role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Specifications v</a>
        </h3>

        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    @foreach ($specifications as $spec)
                        <div class="row">
                            <h6 class="col-md-4">{{ $spec->type }}</h6>
                            <h6 class="col-md-4 text-muted">{{ ": " . $spec->answer }}</h6>
                            <div class="dropdown-divider"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- scripts  -->
    </div>

@endsection