<x-forntend.master>
    <x-slot:title>
        HOME
        </x-slot>

        <!-- <section class="latest-product spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-md-3"></div>
                        <div class="latest-product__text col-md-6">
                            <div class="categories__item set-bg w-100" data-setbg="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/2358239/300/200/m1/fpnw/wm0/011-.jpg?1488522070&s=ebadb1f1562113f6cae85cf8874498ad">
                                <h5><a href="#">WELLCOME TO AJOB E-COMMERCE</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- <section class="breadcrumb-section " style="margin-top: 1rem;" data-setbg="">
            <div class="col-md-12 row">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center">
                    <div class="container">
                        <img src="https://cmkt-image-prd.global.ssl.fastly.net/0.1.0/ps/2358239/300/200/m1/fpnw/wm0/011-.jpg?1488522070&s=ebadb1f1562113f6cae85cf8874498ad" alt="">

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="text-danger">
                                    <h2>WELLCOME TO AJOB E-COMMERCE</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->

        <section class="categories mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="categories__slider owl-carousel">
                        @foreach ($category as $categorys)
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="{{ asset('storage/categories/' . $categorys->image) }}">
                                    <h5><a
                                            href="{{ route('frontend.products.index', $categorys->id) }}">{{ $categorys->name }}</a>
                                    </h5>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- Categories Section End -->
        <div class="section-title text-center mt-5">
            <h2>Latest Product</h2>
        </div>
        <!-- Featured Section Begin -->
        <section class="featured spad">
            <div class="container-fluid">
                <div class="row featured__filter " data-masonry='{"percentPosition": true}'>
                    @foreach ($productall as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                            <div class="featured__item">
                                <div class="featured__item__pic set-bg"
                                    data-setbg="{{ asset('storage/products/' . $product->image) }}">
                                    <ul class="featured__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Add To Card</a></li>
                                    </ul>
                                </div>
                                <div class="featured__item__text">
                                    <h6><a href="#">{{ $product->name }}</a></h6>
                                    <h5>৳{{ $product->price }}</h5>
                                    <a href="{{ route('frontend.products.show', $product->id) }}"
                                        class="btn btn-info">Show Detels</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <span>{{ $productall->links() }}</span>
            </div>
            </div>
        </section>
        <!-- Featured Section End -->

        <!-- Banner Begin -->

        <!-- <div class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="https://images.unsplash.com/photo-1578939662863-5cd416d45a69?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGdhcm1lbnRzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="w-100" height="300" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="https://images.unsplash.com/photo-1589878749396-b0c9117a91eb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGNhbWFyYXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="w-100" height="300" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Banner End -->

        <!-- Latest Product Section Begin -->
        <section class="latest-product spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Latest Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                @foreach ($productall as $product)
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Top Rated Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                @foreach ($productall as $product)
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="latest-product__text">
                            <h4>Review Products</h4>
                            <div class="latest-product__slider owl-carousel">
                                @foreach ($productall as $product)
                                    <div class="latest-prdouct__slider__item">
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                        <a href="#" class="latest-product__item">
                                            <div class="latest-product__item__pic">
                                                <img src="{{ asset('storage/products/' . $product->image) }}"
                                                    alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6>Crab Pool Security</h6>
                                                <span>৳700.00</span>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Product Section End -->

        <!-- Blog Section Begin -->
        <section class="from-blog spad">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title from-blog__title">
                            <h2>From The Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="blog__item">
                                        <div class="blog__item__pic">
                                            <img src="{{ $blog->image }}" height="500" alt="">
                                        </div>
                                        <div class="blog__item__text">
                                            <ul>
                                                <li><i class="fa fa-calendar-o"></i> {{ $blog->created_at }}</li>

                                            </ul>
                                            <h5><a href="#">{{ $blog->title }}</a></h5>
                                            <p>{{ $blog->blog }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <span>{{ $blogs->links() }}</span>
                </div>
            </div>
        </section>

        @push('script')
            <!-- script -->
        @endpush
        <!-- ................................ -->
        <!-- fooder//////////////////////////////// -->
        <x-forntend.partials.card />
</x-forntend.master>
