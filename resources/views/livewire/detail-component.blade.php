<main class="main">
    <!-- Quick view -->
    {{-- <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    @if ($product->image)
                                        @foreach ($product->image as $img)
                                            <figure class="border-radius-10">
                                                <img src="{{ url('images/' . $img) }}" alt="product image">
                                            </figure>
                                        @endforeach
                                    @else
                                        <figure class="border-radius-10">
                                            <img src="{{ url('images/deflaut/deflaut_product.png') }}" alt="product image">
                                        </figure>
                                    @endif
                                </div>
                                <!-- THUMBNAILS -->
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    @if ($product->image)
                                        @foreach ($product->image as $img)
                                            <div>
                                                <img src="{{ url('images/' . $img) }}" alt="product image">
                                            </div>
                                        @endforeach
                                    @else
                                        <div>
                                            <img src="{{ url('images/deflaut/deflaut_product.png') }}" alt="product image">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- End Gallery -->
                            <div class="social-icons single-share">
                                <ul class="text-grey-5 d-inline-block">
                                    <li><strong class="mr-10">Share this:</strong></li>
                                    <li class="social-facebook"><a href="#"><img
                                                src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a></li>
                                    <li class="social-twitter"> <a href="#"><img
                                                src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a></li>
                                    <li class="social-instagram"><a href="#"><img
                                                src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a>
                                    </li>
                                    <li class="social-linkedin"><a href="#"><img
                                                src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30">{{ $product->name }}</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Brands: <a href="shop.html">{{ $product->category->name }}</a></span>
                                    </div>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand">{{ $product->price }} VND</span></ins>
                                        <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p class="font-sm">{{ $product->description }}</p>
                                </div>
                                <div class="attr-detail attr-color mb-15">
                                    <strong class="mr-10">Color</strong>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span
                                                    class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span
                                                    class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span
                                                    class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span
                                                    class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span
                                                    class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span
                                                    class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span
                                                    class="product-color-purple"></span></a></li>
                                    </ul>
                                </div>
                                <div class="attr-detail attr-size">
                                    <strong class="mr-10">Size</strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">S</a></li>
                                        <li class="active"><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href=""><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                class="fi-rs-shuffle"></i></a>
                                    </div>
                                </div>
                                <ul class="product-meta font-xs color-grey mt-50">
                                    <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                    <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a
                                            href="#" rel="tag">Women</a>, <a href="#"
                                            rel="tag">Dress</a> </li>
                                    <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('home.component') }}" rel="nofollow">Home</a>
                <span></span>
                @foreach ($category as $item)
                    @if ($item->id == $product->category->parent_id)
                        {{ $item->name }}
                        <span></span> {{ $product->category->name }}
                    @endif
                @endforeach
                {{-- <span></span> {{ $product->name }} --}}
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="product-detail accordion-detail">
                        <div class="row mb-50">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                    <!-- MAIN SLIDES -->
                                    <div class="product-image-slider">
                                        @if ($product->image)
                                            @foreach ($product->image as $img)
                                                <figure class="border-radius-10">
                                                    <img src="{{ url('images/' . $img) }}" alt="product image">
                                                </figure>
                                            @endforeach
                                        @else
                                            <figure class="border-radius-10">
                                                <img src="{{ url('images/deflaut/deflaut_product.png') }}"
                                                    alt="product image">
                                            </figure>
                                        @endif
                                    </div>
                                    <!-- THUMBNAILS -->
                                    <div class="slider-nav-thumbnails pl-15 pr-15">
                                        @if ($product->image)
                                            @foreach ($product->image as $img)
                                                <div>
                                                    <img src="{{ url('images/' . $img) }}" alt="product image">
                                                </div>
                                            @endforeach
                                        @else
                                            <div>
                                                <img src="{{ url('images/deflaut/deflaut_product.png') }}"
                                                    alt="product image">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <!-- End Gallery -->
                                <div class="social-icons single-share">
                                    <ul class="text-grey-5 d-inline-block">
                                        <li><strong class="mr-10">Share this:</strong></li>
                                        <li class="social-facebook"><a href="#"><img
                                                    src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}"
                                                    alt=""></a>
                                        </li>
                                        <li class="social-twitter"> <a href="#"><img
                                                    src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}"
                                                    alt=""></a>
                                        </li>
                                        <li class="social-instagram"><a href="#"><img
                                                    src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}"
                                                    alt=""></a>
                                        </li>
                                        <li class="social-linkedin"><a href="#"><img
                                                    src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="detail-info">
                                    <h2 class="title-detail"
                                        style="overflow: hidden;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;">
                                        {{ $product->name }}</h2>
                                    <div class="product-detail-rating">
                                        <div class="pro-details-brand">
                                            <span> Brands: <a
                                                    href="{{ route('shop.component') }}">{{ $product->category->name }}</a></span>
                                        </div>
                                        <div class="product-rate-cover text-end">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width:90%">
                                                </div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                        </div>
                                    </div>
                                    <div class="clearfix product-price-cover">
                                        <div class="product-price primary-color float-left">
                                            <ins><span
                                                    class="text-brand">{{ number_format($product->price, 0, '', ',') }}
                                                    VND</span></ins>
                                            {{-- <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                            <span class="save-price  font-md color3 ml-15">25% Off</span> --}}
                                        </div>
                                    </div>
                                    <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                    <div class="short-desc mb-30">
                                        <p
                                            style="text-align: justify;overflow: hidden;display: -webkit-box;-webkit-line-clamp: 4;-webkit-box-orient: vertical;">
                                            {!! $product->description !!}
                                        </p>
                                    </div>
                                    {{-- <div class="product_sort_info font-xs mb-30">
                                        <ul>
                                            <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand
                                                Warranty</li>
                                            <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy
                                            </li>
                                            <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                        </ul>
                                    </div> --}}
                                    {{-- <div class="attr-detail attr-color mb-15">
                                        <strong class="mr-10">Color</strong>
                                        <ul class="list-filter color-filter">
                                            <li><a href="#" data-color="Red"><span
                                                        class="product-color-red"></span></a></li>
                                            <li><a href="#" data-color="Yellow"><span
                                                        class="product-color-yellow"></span></a></li>
                                            <li class="active"><a href="#" data-color="White"><span
                                                        class="product-color-white"></span></a></li>
                                            <li><a href="#" data-color="Orange"><span
                                                        class="product-color-orange"></span></a></li>
                                            <li><a href="#" data-color="Cyan"><span
                                                        class="product-color-cyan"></span></a></li>
                                            <li><a href="#" data-color="Green"><span
                                                        class="product-color-green"></span></a></li>
                                            <li><a href="#" data-color="Purple"><span
                                                        class="product-color-purple"></span></a></li>
                                        </ul>
                                    </div> --}}
                                    {{-- <div class="attr-detail attr-size">
                                        <strong class="mr-10">Size</strong>
                                        <ul class="list-filter size-filter font-small">
                                            <li><a href="#">S</a></li>
                                            <li class="active"><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                            <li><a href="#">XXL</a></li>
                                        </ul>
                                    </div> --}}
                                    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                    <div class="detail-extralink">
                                        <div class="detail-qty border radius" style="padding:0px">
                                            <input class="qty-val" wire:model="quantity.{{ $product->id }}">
                                            {{-- <a href="#" class="qty-down">
                                                <i class="fi-rs-angle-small-down"></i></a>
                                            <a href="#" class="qty-up">
                                                <i class="fi-rs-angle-small-up"></i></a> --}}
                                        </div>
                                        <br>
                                        <div class="product-extra-link2">
                                            <button type="submit"
                                                wire:click.prevent="addToCart('{{ $product->id }}')"
                                                class="button button-add-to-cart">Add to
                                                cart</button>
                                            {{-- <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href=""><i class="fi-rs-heart"></i></a> --}}
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i
                                                    class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <ul class="product-meta font-xs color-grey mt-50">
                                        <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                        <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a
                                                href="#" rel="tag">Women</a>, <a href="#"
                                                rel="tag">Dress</a> </li>
                                        <li>Availability:<span class="in-stock text-success ml-5">8 Items In
                                                Stock</span></li>
                                    </ul>
                                </div>
                                <!-- Detail Info -->
                            </div>
                        </div>
                        <div class="tab-style3">
                            <ul class="nav nav-tabs text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                                        href="#Description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="Additional-info-tab" data-bs-toggle="tab"
                                        href="#Additional-info">Additional info</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab"
                                        href="#Reviews">Reviews (3)</a>
                                </li> --}}
                            </ul>
                            <div class="tab-content shop_info_tab entry-main-content">
                                <div class="tab-pane fade show active" id="Description">
                                    <div class="" style="text-align: justify;">
                                        {!! $product->description !!}
                                        {{-- <p>Uninhibited carnally hired played in whimpered dear gorilla koala depending
                                            and much yikes off far quetzal goodness and from for grimaced goodness
                                            unaccountably and meadowlark near unblushingly crucial scallop
                                            tightly neurotic hungrily some and dear furiously this apart.</p>
                                        <p>Spluttered narrowly yikes left moth in yikes bowed this that grizzly much
                                            hello on spoon-fed that alas rethought much decently richly and wow against
                                            the frequent fluidly at formidable acceptably flapped
                                            besides and much circa far over the bucolically hey precarious goldfinch
                                            mastodon goodness gnashed a jellyfish and one however because.
                                        </p>
                                        <ul class="product-more-infor mt-30">
                                            <li><span>Type Of Packing</span> Bottle</li>
                                            <li><span>Color</span> Green, Pink, Powder Blue, Purple</li>
                                            <li><span>Quantity Per Case</span> 100ml</li>
                                            <li><span>Ethyl Alcohol</span> 70%</li>
                                            <li><span>Piece In One</span> Carton</li>
                                        </ul>
                                        <hr class="wp-block-separator is-style-dots">
                                        <p>Laconic overheard dear woodchuck wow this outrageously taut beaver hey hello
                                            far meadowlark imitatively egregiously hugged that yikes minimally unanimous
                                            pouted flirtatiously as beaver beheld above forward
                                            energetic across this jeepers beneficently cockily less a the raucously that
                                            magic upheld far so the this where crud then below after jeez enchanting
                                            drunkenly more much wow callously irrespective limpet.</p>
                                        <h4 class="mt-30">Packaging & Delivery</h4>
                                        <hr class="wp-block-separator is-style-wide">
                                        <p>Less lion goodness that euphemistically robin expeditiously bluebird smugly
                                            scratched far while thus cackled sheepishly rigid after due one assenting
                                            regarding censorious while occasional or this more crane
                                            went more as this less much amid overhung anathematic because much held one
                                            exuberantly sheep goodness so where rat wry well concomitantly.
                                        </p>
                                        <p>Scallop or far crud plain remarkably far by thus far iguana lewd precociously
                                            and and less rattlesnake contrary caustic wow this near alas and next and
                                            pled the yikes articulate about as less cackled dalmatian
                                            in much less well jeering for the thanks blindly sentimental whimpered less
                                            across objectively fanciful grimaced wildly some wow and rose jeepers
                                            outgrew lugubrious luridly irrationally attractively
                                            dachshund.
                                        </p> --}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Additional-info">
                                    @foreach ($category as $item)
                                        @if ($item->id == $product->category->parent_id)
                                            @if ($item->name == 'Điện thoại')
                                                <table class="font-md">
                                                    <tbody>
                                                        <tr class="stand-up">
                                                            <th>Màn hình</th>
                                                            <td>
                                                                @if (isset($variant->monitor))
                                                                    <p>{{ $variant->monitor }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-wo-wheels">
                                                            <th>Hệ điều hành</th>
                                                            <td>
                                                                @if (isset($variant->operating))
                                                                    <p>{{ $variant->operating }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-w-wheels">
                                                            <th>Camera sau</th>
                                                            <td>
                                                                @if (isset($variant->camera_behind))
                                                                    <p>{{ $variant->camera_behind }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="door-pass-through">
                                                            <th>Camera trước</th>
                                                            <td>
                                                                @if (isset($variant->camera_front))
                                                                    <p>{{ $variant->camera_front }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="frame">
                                                            <th>Chip</th>
                                                            <td>
                                                                @if (isset($variant->chip))
                                                                    <p>{{ $variant->chip }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-wo-wheels">
                                                            <th>Ram</th>
                                                            <td>
                                                                @if (isset($variant->ram))
                                                                    <p>{{ $variant->ram }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-capacity">
                                                            <th>Dung lượng lưu trữ</th>
                                                            <td>
                                                                @if (isset($variant->storage))
                                                                    <p>{{ $variant->storage }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="width">
                                                            <th>SIM</th>
                                                            <td>
                                                                @if (isset($variant->sim))
                                                                    <p>{{ $variant->sim }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="handle-height-ground-to-handle">
                                                            <th>Pin, Sạc</th>
                                                            <td>
                                                                @if (isset($variant->battery))
                                                                    <p>{{ $variant->battery }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            @elseif ($item->name == 'Laptop')
                                                <table class="font-md">
                                                    <tbody>
                                                        <tr class="stand-up">
                                                            <th>CPU</th>
                                                            <td>
                                                                @if (isset($variant->cpu))
                                                                    <p>{{ $variant->cpu }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-wo-wheels">
                                                            <th>RAM</th>
                                                            <td>
                                                                @if (isset($variant->ram))
                                                                    <p>{{ $variant->ram }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-w-wheels">
                                                            <th>Ổ cứng</th>
                                                            <td>
                                                                @if (isset($variant->drive))
                                                                    <p>{{ $variant->drive }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="door-pass-through">
                                                            <th>Màn hình</th>
                                                            <td>
                                                                @if (isset($variant->monitor))
                                                                    <p>{{ $variant->monitor }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="frame">
                                                            <th>Card màn hình</th>
                                                            <td>
                                                                @if (isset($variant->graphic))
                                                                    <p>{{ $variant->graphic }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-wo-wheels">
                                                            <th>Cổng kết nối</th>
                                                            <td>
                                                                @if (isset($variant->connector))
                                                                    <p>{{ $variant->connector }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-capacity">
                                                            <th>Hệ điều hành</th>
                                                            <td>
                                                                @if (isset($variant->operating))
                                                                    <p>{{ $variant->operating }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="width">
                                                            <th>Thiết kế</th>
                                                            <td>
                                                                @if (isset($variant->design))
                                                                    <p>{{ $variant->design }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="handle-height-ground-to-handle">
                                                            <th>Kích thước, khối lượng</th>
                                                            <td>
                                                                @if (isset($variant->size))
                                                                    <p>{{ $variant->size }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="handle-height-ground-to-handle">
                                                            <th>Thời điểm ra mắt</th>
                                                            <td>
                                                                @if (isset($variant->release_time))
                                                                    <p>{{ $variant->release_time }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            @elseif ($item->name == 'Phụ kiện')
                                                <table class="font-md">
                                                    <tbody>
                                                        <tr class="stand-up">
                                                            <th>Thời gian tai nghe</th>
                                                            <td>
                                                                @if (isset($variant->monitor))
                                                                    <p>{{ $variant->monitor }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-wo-wheels">
                                                            <th>Thời gian hộp sạc</th>
                                                            <td>
                                                                @if (isset($variant->ram))
                                                                    <p>{{ $variant->ram }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="folded-w-wheels">
                                                            <th>Cổng sạc</th>
                                                            <td>
                                                                @if (isset($variant->operating))
                                                                    <p>{{ $variant->operating }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="door-pass-through">
                                                            <th>Công nghệ âm thanh</th>
                                                            <td>
                                                                @if (isset($variant->cpu))
                                                                    <p>{{ $variant->cpu }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="frame">
                                                            <th>Tương thích</th>
                                                            <td>
                                                                @if (isset($variant->drive))
                                                                    <p>{{ $variant->drive }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-wo-wheels">
                                                            <th>Tiện ích</th>
                                                            <td>
                                                                @if (isset($variant->graphic))
                                                                    <p>{{ $variant->graphic }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="weight-capacity">
                                                            <th>Hỗ trợ kết nối</th>
                                                            <td>
                                                                @if (isset($variant->connector))
                                                                    <p>{{ $variant->connector }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="width">
                                                            <th>Điều khiển bằng</th>
                                                            <td>
                                                                @if (isset($variant->design))
                                                                    <p>{{ $variant->design }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        <tr class="handle-height-ground-to-handle">
                                                            <th>Hãng</th>
                                                            <td>
                                                                @if (isset($variant->size))
                                                                    <p>{{ $variant->size }}</p>
                                                                @else
                                                                    <p>Không có thông số</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="Reviews">
                                    <!--Comments-->
                                    <div class="comments-area">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <h4 class="mb-30">Customer questions & answers</h4>
                                                <div class="comment-list">
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="assets/imgs/page/avatar-6.jpg"
                                                                    alt="">
                                                                <h6><a href="#">Jacky Chan</a></h6>
                                                                <p class="font-xxs">Since 2012</p>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <p>Thank you very fast shipping from Poland only 3days.
                                                                </p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020 at
                                                                            3:12 pm </p>
                                                                        <a href="#"
                                                                            class="text-brand btn-reply">Reply <i
                                                                                class="fi-rs-arrow-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--single-comment -->
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="assets/imgs/page/avatar-7.jpg"
                                                                    alt="">
                                                                <h6><a href="#">Ana Rosie</a></h6>
                                                                <p class="font-xxs">Since 2008</p>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <p>Great low price and works well.</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020 at
                                                                            3:12 pm </p>
                                                                        <a href="#"
                                                                            class="text-brand btn-reply">Reply <i
                                                                                class="fi-rs-arrow-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--single-comment -->
                                                    <div class="single-comment justify-content-between d-flex">
                                                        <div class="user justify-content-between d-flex">
                                                            <div class="thumb text-center">
                                                                <img src="assets/imgs/page/avatar-8.jpg"
                                                                    alt="">
                                                                <h6><a href="#">Steven Keny</a></h6>
                                                                <p class="font-xxs">Since 2010</p>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="product-rate d-inline-block">
                                                                    <div class="product-rating" style="width:90%">
                                                                    </div>
                                                                </div>
                                                                <p>Authentic and Beautiful, Love these way more than
                                                                    ever expected They are Great earphones</p>
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex align-items-center">
                                                                        <p class="font-xs mr-30">December 4, 2020 at
                                                                            3:12 pm </p>
                                                                        <a href="#"
                                                                            class="text-brand btn-reply">Reply <i
                                                                                class="fi-rs-arrow-right"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--single-comment -->
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <h4 class="mb-30">Customer reviews</h4>
                                                <div class="d-flex mb-30">
                                                    <div class="product-rate d-inline-block mr-15">
                                                        <div class="product-rating" style="width:90%">
                                                        </div>
                                                    </div>
                                                    <h6>4.8 out of 5</h6>
                                                </div>
                                                <div class="progress">
                                                    <span>5 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>4 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>3 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                        aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <span>2 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                        aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%
                                                    </div>
                                                </div>
                                                <div class="progress mb-30">
                                                    <span>1 star</span>
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%
                                                    </div>
                                                </div>
                                                <a href="#" class="font-xs text-muted">How are ratings
                                                    calculated?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--comment form-->
                                    <div class="comment-form">
                                        <h4 class="mb-15">Add a review</h4>
                                        <div class="product-rate d-inline-block mb-30">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <form class="form-contact comment_form" action="#"
                                                    id="commentForm">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                                                    placeholder="Write Comment"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="name"
                                                                    id="name" type="text" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <input class="form-control" name="email"
                                                                    id="email" type="email"
                                                                    placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="website"
                                                                    id="website" type="text"
                                                                    placeholder="Website">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="button button-contactForm">Submit
                                                            Review</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-60">
                            <div class="col-12">
                                <h3 class="section-title style-1 mb-30">Related products</h3>
                            </div>
                            <div class="col-12">
                                <div class="row related-products">
                                    @foreach ($related as $item)
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ route('detail.product', ['slug' => $item->slug]) }}"
                                                            tabindex="0">
                                                            @if ($item->image)
                                                                <img class="default-img"
                                                                    src="{{ url('images/' . $item->image[0]) }}"
                                                                    alt="Error">
                                                            @else
                                                                <img src="{{ url('images/deflaut/deflaut_product.png') }}"
                                                                    alt="Error">
                                                            @endif
                                                            {{-- <img class="default-img"
                                                                src="{{ asset('assets/imgs/shop/product-4-1.jpg') }}"
                                                                alt="">
                                                            <img class="hover-img"
                                                                src="{{ asset('assets/imgs/shop/product-4-2.jpg') }}"
                                                                alt=""> --}}
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        {{-- <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" wire:click.prevent="quickView({{ $item->id }})" data-bs-target="#quickViewModal"><i
                                                                class="fi-rs-search"></i></a> --}}
                                                        {{-- <a aria-label="Compare" class="action-btn small hover-up"
                                                                    href="" tabindex="0"><i
                                                                        class="fi-rs-shuffle"></i></a> --}}
                                                        {{-- <a aria-label="Add To Wishlist"
                                                            class="action-btn small hover-up" href=""
                                                            tabindex="0"><i class="fi-rs-heart"></i></a> --}}
                                                        <a aria-label="Add To Cart" class="action-btn small hover-up"
                                                            wire:click.prevent="addToCart('{{ $item->id }}')">
                                                            <i class="fi-rs-shopping-bag-add"></i></a>
                                                    </div>
                                                    <div
                                                        class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="new">New</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a style="overflow: hidden;
                                                        display: -webkit-box;
                                                        -webkit-line-clamp: 1;
                                                        -webkit-box-orient: vertical;"
                                                            href="{{ route('detail.product', ['slug' => $item->slug]) }}"
                                                            tabindex="0">{{ $item->name }}</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>{{ number_format($item->price, 0, '', ',') }} VND</span>
                                                        <span class="old-price">$1245.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="widget-category mb-30">
                        <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
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
                    <!-- Fillter By Price -->
                    {{-- <div class="sidebar-widget price_range range mb-30">
                        <div class="widget-header position-relative mb-20 pb-10">
                            <h5 class="widget-title mb-10">Fill by price</h5>
                            <div class="bt-1 border-color-1"></div>
                        </div>
                        <div class="price-filter">
                            <div class="price-filter-inner">
                                <div id="slider-range"></div>
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
                    <!-- Product sidebar Widget -->
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
                                        <img src="{{ url('images/deflaut/deflaut_product.png') }}" alt="Error">
                                    @endif
                                </div>
                                <div class="content pt-10">
                                    <h6><a style="overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 1;
                                        -webkit-box-orient: vertical;"
                                            href="{{ route('detail.product', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                    </h6>
                                    <p class="price mb-0 mt-5">{{ number_format($item->price, 0, '', ',') }} VND</p>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:60%"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
