<div class="content" bis_skin_checked="1">
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                <div class="box" bis_skin_checked="1">
                    <!-- product-description -->
                    <div class="box-body" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" bis_skin_checked="1">
                                <ul class="slideshow_thumbs scrollbar" id="style-5"
                                    style="height:350px;overflow:auto">
                                    {{-- id="demo1_thumbs" --}}
                                    @if ($product->image)
                                        @foreach ($product->image as $img)
                                            <li class="">
                                                <div class="thumb-img" bis_skin_checked="1">
                                                    <img class="" src="{{ url('images/' . $img) }}" alt="">
                                                </div>
                                            </li>
                                        @endforeach
                                    @else
                                        <li>
                                            <a href="{{ url('images/deflaut_product.png') }}" data-desoslide-index="0">
                                                <div class=" thumb-img" bis_skin_checked="1">
                                                    <img src="{{ url('images/deflaut_product.png') }}" alt="">
                                                </div>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" bis_skin_checked="1">
                                <div id="slideshow" bis_skin_checked="1">
                                    <div class="desoslide-wrapper" bis_skin_checked="1">
                                        @if ($product->image)
                                            <div class="slider owl-carousel owl-one owl-theme">
                                                @foreach ($product->image as $img)
                                                    <div class="item">
                                                        <img class="img-responsive animated fadeIn"
                                                            src="{{ url('images/' . $img) }}">
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <img src="{{ url('images/deflaut_product.png') }}" alt="Error">
                                        @endif
                                        <div class="desoslide-overlay" bis_skin_checked="1"
                                            style="left: 0px; top: 241px; width: 273px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; opacity: 0.7;">
                                            <div class="desoslide-controls-wrapper" bis_skin_checked="1"><a
                                                    class="desoslide-controls prev" href="#prev"></a><a
                                                    class="desoslide-controls pause" href="#pause"
                                                    style="display: none;"></a><a class="desoslide-controls play"
                                                    href="#play"></a><a class="desoslide-controls next"
                                                    href="#next"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                                <div class="product-single" bis_skin_checked="1">
                                    <h2>{{ $product->name }}</h2>
                                    <div class="product-rating" bis_skin_checked="1">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                        <span class="text-secondary">&nbsp;(4.8 Review Stars)</span>
                                    </div>
                                    <p class="product-price" style="font-size: 38px;">{{ $product->price }}
                                        VND<strike>$1300</strike></p>
                                    <p>{{ $product->description }}</p>
                                    <div class="product-quantity" bis_skin_checked="1">
                                        <h5>Quantity</h5>
                                        <div class="quantity mb20" bis_skin_checked="1">
                                            <input type="number" class="input-text qty text" step="1"
                                                min="1" max="6" name="quantity" value="1"
                                                title="Qty" size="4" pattern="[0-9]*">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default"><i
                                            class="fa fa-shopping-cart"></i>&nbsp;Add to cart</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                <div class="box-head scroll-nav" bis_skin_checked="1">
                    <div class="head-title" bis_skin_checked="1"> <a class="page-scroll active" href="#product">Product
                            Details</a>
                        <a class="page-scroll" href="#rating">Ratings &amp; Reviews</a>
                        <a class="page-scroll" href="#review">Add Your Reviews</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- highlights -->
        <div class="row" bis_skin_checked="1">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                <div class="box" id="product" bis_skin_checked="1">
                    <div class="box-body" bis_skin_checked="1">
                        <div class="highlights" bis_skin_checked="1">
                            <h4 class="product-small-title">Highlights</h4>
                            <div class="row" bis_skin_checked="1">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" bis_skin_checked="1">
                                    <ul class="arrow">
                                        <li>12.2 MP Rear | 8 MP Front Camera </li>
                                        <li>4GB RAM </li>
                                        <li>2700 mAh battery</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" bis_skin_checked="1">
                                    <ul class="arrow">
                                        <li>Android 8.0 </li>
                                        <li>Qualcomm Snapdragon 835</li>
                                        <li>Fingerprint Sensor</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="highlights" bis_skin_checked="1">
                            <h4 class="product-small-title">Specification</h4>
                            <div class="row" bis_skin_checked="1">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                    <h4>General</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30" bis_skin_checked="1">
                                    <ul>
                                        <li>Brand</li>
                                        <li>Model Number </li>
                                        <li>Body Material</li>
                                        <li>Sim Size</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb30" bis_skin_checked="1">
                                    <ul>
                                        <li style="color: #1c1e1e;">Google Pixel </li>
                                        <li style="color: #1c1e1e;">Google XYZ</li>
                                        <li style="color: #1c1e1e;">Metal and Polycarbonate</li>
                                        <li style="color: #1c1e1e;">Micro</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row" bis_skin_checked="1">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                    <h4>Display</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" bis_skin_checked="1">
                                    <ul>
                                        <li>Screen Size </li>
                                        <li>Display Resolution </li>
                                        <li>Pixel Density</li>
                                        <li>Screen Protection </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" bis_skin_checked="1">
                                    <ul>
                                        <li style="color: #1c1e1e;">5 inch </li>
                                        <li style="color: #1c1e1e;">1280 X 720 Pixels</li>
                                        <li style="color: #1c1e1e;">294 PPI</li>
                                        <li style="color: #1c1e1e;">Gorilla Glass 4</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rating reviews  -->
        <div id="rating" bis_skin_checked="1">
            <div class="row" bis_skin_checked="1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                    <div class="box" bis_skin_checked="1">
                        <div class="box-head" bis_skin_checked="1">
                            <h3 class="head-title">Rating &amp; Reviews</h3>
                        </div>
                        <div class="box-body" bis_skin_checked="1">
                            <div class="row" bis_skin_checked="1">
                                <div class="rating-review" bis_skin_checked="1">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" bis_skin_checked="1">
                                        <h1>4.8</h1>
                                        <div class="product-rating" bis_skin_checked="1">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <p class="text-secondary">20 Ratings &amp; 10 Reviews</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" bis_skin_checked="1">
                                        <h2>80%</h2>
                                        <p class="text-secondary">Based on 20 Recommendations.</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" bis_skin_checked="1">
                                        <h4>Have you used this product?</h4>
                                        <a href="#" class="btn btn-primary btn-sm">review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.rating reviews  -->
            <!-- customers review  -->
            <div class="row" bis_skin_checked="1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                    <div class="box" bis_skin_checked="1">
                        <div class="box-head" bis_skin_checked="1">
                            <h3 class="head-title">Customer Reviews</h3>
                        </div>
                        <div class="box-body" bis_skin_checked="1">
                            <div class="row" bis_skin_checked="1">
                                <div class="customer-reviews" bis_skin_checked="1">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                        <div class="product-rating" bis_skin_checked="1">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <p class="reviews-text">By <span class="text-default">Michael Byrd</span> on
                                            14 August 2017 </p>
                                        <p>Mauris aliquet augue seenim finibusat consectetur metus congutiam convallis
                                            aliquam conguen ornare exdolornon scelerisque nisl fringilla ut. Maecenas
                                            faucibus purus id elementum laoreen a hendrerit ested laoreet nibh vel lacus
                                            sagittis, eu laoreet metus viverraed rutrum.</p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                        <div class="divider-line" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <div class="customer-reviews" bis_skin_checked="1">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                        <div class="product-rating" bis_skin_checked="1">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <p class="reviews-text">By <span class="text-default">Marc Scott</span> on 13
                                            August 2017 </p>
                                        <p>Vivamus molestie enim ut libero condimentumvel malesuada mivulpuorem ipsum
                                            dolor sitamet consectetur adipiscing elinec semper orcinec ultricies
                                            ultricieunc velitest variussed suscipit sed dignissim acanteras aliquet
                                            magna ipsum dictum vulputate dolor suscipit non. </p>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                        <div class="divider-line" bis_skin_checked="1"></div>
                                    </div>
                                </div>
                                <div class="customer-reviews" bis_skin_checked="1">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                        <div class="product-rating" bis_skin_checked="1">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <p class="reviews-text">By <span class="text-default">William Cassidy</span>
                                            on 13 August 2017 </p>
                                        <p>Suspendisse viverra nibh vel mattis aliqueroin ultricies vitaeex quis
                                            sceleriuisque eleifend convallis leoorbi ultricies turpis nullanec accumsan
                                            mi molestie nonaecenas cursus massa quis condimentum venenati uspendisse
                                            idmassaut lacus dignissim vestibuonec malesuada ultricies euismod. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customers review  -->
            <!-- reviews-form -->
            <div id="review" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                        <div class="box" bis_skin_checked="1">
                            <div class="box-head" bis_skin_checked="1">
                                <h3 class="head-title">Add A Reviews</h3>
                            </div>
                            <div class="box-body" bis_skin_checked="1">
                                <div class="row" bis_skin_checked="1">
                                    <div class="review-form" bis_skin_checked="1">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                                            <div class="review-rating" bis_skin_checked="1">
                                                <h5>Your Rating : &nbsp;</h5>
                                                <div class="star-rate jq-ry-container" id="rateYo"
                                                    style="width: 80px;" bis_skin_checked="1">
                                                    <div class="jq-ry-group-wrapper" bis_skin_checked="1">
                                                        <div class="jq-ry-normal-group jq-ry-group"
                                                            bis_skin_checked="1">
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="gray">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="gray"
                                                                style="margin-left: 0px;">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="gray"
                                                                style="margin-left: 0px;">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="gray"
                                                                style="margin-left: 0px;">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="gray"
                                                                style="margin-left: 0px;">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="jq-ry-rated-group jq-ry-group" style="width: 72%;"
                                                            bis_skin_checked="1">
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="#f39c12">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="#f39c12"
                                                                style="margin-left: 0px;">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="#f39c12"
                                                                style="margin-left: 0px;">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="#f39c12"
                                                                style="margin-left: 0px;">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                            <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 12.705 512 486.59" x="0px"
                                                                y="0px" xml:space="preserve" width="16px"
                                                                height="16px" fill="#f39c12"
                                                                style="margin-left: 0px;">
                                                                <polygon
                                                                    points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                </polygon>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                                                <div class="form-group" bis_skin_checked="1">
                                                    <label class="control-label sr-only " for="name"></label>
                                                    <input id="name" type="text" class="form-control"
                                                        placeholder="Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" bis_skin_checked="1">
                                                <div class="form-group" bis_skin_checked="1">
                                                    <label class="control-label sr-only " for="email"></label>
                                                    <input id="email" type="text" class="form-control"
                                                        placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12" bis_skin_checked="1">
                                                <div class="form-group" bis_skin_checked="1">
                                                    <label class="control-label sr-only " for="textarea"></label>
                                                    <textarea class="form-control" id="textarea" name="textarea" rows="4" placeholder="Enter your Reviews"></textarea>
                                                </div>
                                                <button id="submit" name="singlebutton"
                                                    class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.reviews-form -->
        </div>
    </div>
    <!-- /.product-description -->
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" bis_skin_checked="1">
                <div class="box-head" bis_skin_checked="1">
                    <h3 class="head-title">Related Product</h3>
                </div>
            </div>
        </div>
        <div class="box" bis_skin_checked="1">
            <div class="box-body" bis_skin_checked="1">
                <div class="row" bis_skin_checked="1">
                    <!-- product -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30" bis_skin_checked="1">
                        <div class="product-block" bis_skin_checked="1">
                            <div class="product-img" bis_skin_checked="1"><img src="./images/product_img_1.png"
                                    alt=""></div>
                            <div class="product-content" bis_skin_checked="1">
                                <h5><a href="#" class="product-title">{{ $product->name }} <strong>(128GB,
                                            Black)</strong></a></h5>
                                <div class="product-meta" bis_skin_checked="1"><a href="#"
                                        class="product-price">{{ $product->price }}</a>
                                    <a href="#" class="discounted-price">$1400</a>
                                    <span class="offer-price">20%off</span>
                                </div>
                                <div class="shopping-btn" bis_skin_checked="1">
                                    <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="product-btn btn-cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product -->
                    <!-- product -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30" bis_skin_checked="1">
                        <div class="product-block" bis_skin_checked="1">
                            <div class="product-img" bis_skin_checked="1"><img src="./images/product_img_2.png"
                                    alt=""></div>
                            <div class="product-content" bis_skin_checked="1">
                                <h5><a href="#" class="product-title">HTC U Ultra <strong>(64GB,
                                            Blue)</strong></a></h5>
                                <div class="product-meta" bis_skin_checked="1"><a href="#"
                                        class="product-price">$1200</a>
                                    <a href="#" class="discounted-price">$1700</a>
                                    <span class="offer-price">10%off</span>
                                </div>
                                <div class="shopping-btn" bis_skin_checked="1">
                                    <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="product-btn btn-cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product -->
                    <!-- product -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30" bis_skin_checked="1">
                        <div class="product-block" bis_skin_checked="1">
                            <div class="product-img" bis_skin_checked="1"><img src="./images/product_img_3.png"
                                    alt=""></div>
                            <div class="product-content" bis_skin_checked="1">
                                <h5><a href="#" class="product-title">Samsung Galaxy Note 8</a></h5>
                                <div class="product-meta" bis_skin_checked="1"><a href="#"
                                        class="product-price">$1500</a>
                                    <a href="#" class="discounted-price">$2000</a>
                                    <span class="offer-price">40%off</span>
                                </div>
                                <div class="shopping-btn" bis_skin_checked="1">
                                    <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                    <a href="#" class="product-btn btn-cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product -->
                    <!-- product -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb30" bis_skin_checked="1">
                        <div class="product-block" bis_skin_checked="1">
                            <div class="product-img" bis_skin_checked="1"><img src="./images/product_img_4.png"
                                    alt=""></div>
                            <div class="product-content" bis_skin_checked="1">
                                <h5><a href="#" class="product-title">Vivo V5 Plus <strong>(Matte
                                            Black)</strong></a></h5>
                                <div class="product-meta" bis_skin_checked="1"><a href="#"
                                        class="product-price">$1500</a>
                                    <a href="#" class="discounted-price">$2000</a>
                                    <span class="offer-price">15%off</span>
                                </div>
                                <div class="shopping-btn" bis_skin_checked="1">
                                    <a href="#" class="product-btn btn-like">
                                        <i class="fa fa-heart"></i></a>
                                    <a href="#" class="product-btn btn-cart"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.product -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.product-single -->
</div>
