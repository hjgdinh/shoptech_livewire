<main class="main" style="transform: none;">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('shop.component') }}" rel="nofollow">Home</a>
                <span></span> Shop
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-lg-9">
                    <div class="shop-product-fillter">
                        <div class="totall-product">
                            <p> We found <strong class="text-brand">{{ $products->count() }}</strong> items for you!</p>
                        </div>
                        <div class="sort-by-product-area">
                            <div class="sort-by-cover mr-10">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps"></i>Show:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a type="submit" class="{{ $pageSize == 6 ? 'active' : '' }}"
                                                wire:click.prevent="changePageSize(6)">6</a>
                                        </li>
                                        <li><a type="submit" class="{{ $pageSize == 12 ? 'active' : '' }}"
                                                wire:click.prevent="changePageSize(12)">12</a>
                                        </li>
                                        <li><a type="submit" class="{{ $pageSize == 18 ? 'active' : '' }}"
                                                wire:click.prevent="changePageSize(18)">18</a>
                                        </li>
                                        <li><a type="submit" class="{{ $pageSize == 24 ? 'active' : '' }}"
                                                wire:click.prevent="changePageSize(24)">24</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a type="submit"
                                                class="{{ $orderBy == 'Deflaut Sorting' ? 'active' : '' }}"
                                                wire:click.prevent="changeOrderBy('Deflaut Sorting')">Deflaut
                                                Sorting</a>
                                        </li>
                                        <li><a type="submit" class="{{ $orderBy == 'DESC' ? 'active' : '' }}"
                                                wire:click.prevent="changeOrderBy('DESC')">Giá từ cao đến thấp</a>
                                        </li>
                                        <li><a type="submit" class="{{ $orderBy == 'ASC' ? 'active' : '' }}"
                                                wire:click.prevent="changeOrderBy('ASC')">Giá từ thấp đến cao</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid-3">
                        @if ($products->count() > 0)
                            @if (Session::has('message'))
                                <div class="alert alert-success">{{ Session::get('message') }}</div>
                            @endif
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-4 col-6 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href="{{ route('detail.product', ['slug' => $product->slug]) }}">
                                                    @if (count($product->image) >= 2)
                                                        <img class="default-img"
                                                            src="{{ url('images/' . $product->image[0]) }}"
                                                            alt="Error">
                                                        <img class="hover-img"
                                                            src="{{ url('images/' . $product->image[1]) }}"
                                                            alt="Error">
                                                    @elseif(count($product->image) <= 2)
                                                        <img class="default-img"
                                                            src="{{ url('images/' . $product->image[0]) }}"
                                                            alt="Error">
                                                    @else
                                                        <img src="{{ url('images/deflaut/deflaut_product.png') }}"
                                                            alt="Error">
                                                    @endif
                                                </a>
                                                {{-- <img class="default-img" src="assets/imgs/shop/product-3-1.jpg"
                                                alt="">
                                            <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg"
                                                alt=""> --}}
                                            </div>
                                            <div class="product-action-1">
                                                {{-- <a aria-label="Quick view" class="action-btn hover-up"
                                                    data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                    <i class="fi-rs-search"></i></a> --}}
                                                {{-- <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="wishlist.php"><i class="fi-rs-heart"></i></a> --}}
                                                {{-- <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                        class="fi-rs-shuffle"></i></a> --}}
                                                <a aria-label="Add To Cart" class="action-btn hover-up" href=""
                                                    wire:click.prevent="addToCart({{ $product->id }})"><i
                                                        class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">Hot</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a
                                                    href="{{ route('shop.category', ['slug' => $product->category->slug]) }}">{{ $product->category->name }}</a>
                                            </div>
                                            <h2><a style="overflow: hidden;
                                                display: -webkit-box;
                                                -webkit-line-clamp: 1;
                                                -webkit-box-orient: vertical;"
                                                    href="{{ route('detail.product', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                            </h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                <span>{{ number_format($product->price, 0, '', ',') }} VND</span>
                                                <span class="old-price">$245.8</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up"
                                                    wire:click.prevent="addToCart({{ $product->id }})"><i
                                                        class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p style="font-size:20px">Don't have any product right now!</p>
                        @endif
                    </div>
                    <!--pagination-->
                    <div class="paginatin-area mt-15 mb-sm-5 mb-lg-0">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                {{ $products->links() }}
                                {{-- <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">16</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fi-rs-angle-double-small-right"></i></a></li> --}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar"
                    style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">


                    <!-- Fillter By Price -->

                    <!-- Product sidebar Widget -->


                    <div class="theiaStickySidebar"
                        style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <div class="row">
                            <div class="col-lg-12 col-mg-6"></div>
                            <div class="col-lg-12 col-mg-6"></div>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated animated animated animated animated"
                                style="visibility: visible;">Category</h5>
                            <ul class="categories">
                                @foreach ($category as $item)
                                    <li><a
                                            href="{{ route('shop.category', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                    </li>
                                    @if ($item->parent_id == 0)
                                        @foreach ($item->children as $child)
                                            <li style="margin-left: 15px;list-style: inside">
                                                <a
                                                    href="{{ route('shop.category', ['slug' => $child->slug]) }}">{{ $child->name }}</a>
                                            </li>
                                            @foreach ($child->children as $son)
                                                <li style="margin-left: 35px;list-style: inside;">
                                                    <a
                                                        href="{{ route('shop.category', ['slug' => $son->slug]) }}">{{ $son->name }}</a>
                                                </li>
                                            @endforeach
                                        @endforeach
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="sidebar-widget price_range range mb-30">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">Fill by price</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            <div class="price-filter">
                                <div class="price-filter-inner">
                                    <div id="slider-range"
                                        class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="width: 73.9583%; left: 0%;"></div><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 0%;"></span><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 73.9583%;"></span>
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="width: 73.9583%; left: 0%;"></div>
                                    </div>
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <span>Range:</span><input type="text" id="amount" name="price"
                                                placeholder="Add Your Price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group">
                                <div class="list-group-item mb-10 mt-10">
                                    <label class="fw-900">Color</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>Red
                                                (56)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox2" value="">
                                        <label class="form-check-label" for="exampleCheckbox2"><span>Green
                                                (78)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Blue
                                                (54)</span></label>
                                    </div>
                                    <label class="fw-900 mt-15">Item Condition</label>
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox11" value="">
                                        <label class="form-check-label" for="exampleCheckbox11"><span>New
                                                (1506)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox21" value="">
                                        <label class="form-check-label" for="exampleCheckbox21"><span>Refurbished
                                                (27)</span></label>
                                        <br>
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox31" value="">
                                        <label class="form-check-label" for="exampleCheckbox31"><span>Used
                                                (45)</span></label>
                                    </div>
                                </div>
                            </div>
                            <a href="shop.html" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i>
                                Fillter</a>
                        </div> --}}
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach ($new_product as $item)
                                <div class="single-post clearfix">
                                    <div class="image"
                                        style="display: flex;
                                    align-items: center;">
                                        @if ($item->image)
                                            <img src="{{ url('images/' . $item->image[0]) }}" alt="Error">
                                        @else
                                            <img src="{{ url('images/deflaut/deflaut_product.png') }}"
                                                alt="Error">
                                        @endif
                                    </div>
                                    <div class="content pt-10">
                                        <h6><a style="overflow: hidden;
                                            display: -webkit-box;
                                            -webkit-line-clamp: 1;
                                            -webkit-box-orient: vertical;"
                                                href="{{ route('detail.product', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                        </h6>
                                        <p class="price mb-0 mt-5">{{ number_format($item->price, 0, '', ',') }} VND
                                        </p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:60%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none"
                            style="visibility: hidden; animation-name: none;">
                            <img src="{{ asset('assets/imgs/banner/banner-11.jpg') }}" alt="">
                            <div class="banner-text">
                                <span>Women Zone</span>
                                <h4>Save 17% on <br>Office Dress</h4>
                                <a href="{{ route('shop.component') }}">Shop Now <i
                                        class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
