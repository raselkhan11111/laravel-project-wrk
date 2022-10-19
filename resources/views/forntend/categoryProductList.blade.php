<x-forntend.master>
    <x-slot:title>
        HOME
        </x-slot>


        <!-- Categories Section End -->

        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="row featured__filter " data-masonry='{"percentPosition": true }'>
                @forelse($category->products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/products/'.$product->image)}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{$product->name}}</a></h6>
                            <h5>{{$product->price}} ৳</h5>
                            <a href="{{route('frontend.products.show', $product->id)}}" class="btn btn-info">Show Detels</a>
                        </div>
                    </div>
                </div>

                @empty
                <h1 class="text-center text-danger">No data found</h1>
                @endforelse
            </div>
        </section>
        <!-- Featured Section End -->

        <!-- Banner Begin -->


        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
        <x-forntend.partials.card />
</x-forntend.master>