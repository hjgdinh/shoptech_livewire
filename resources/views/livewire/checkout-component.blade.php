<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Shop
                <span></span> Checkout
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        @if (Cart::count() > 0)
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-6 mb-sm-15">
                        <div class="toggle_info">
                            <span><i class="fi-rs-user mr-10"></i><span class="text-muted">Already have an
                                    account?</span>
                                <a href="#loginform" data-bs-toggle="collapse" class="collapsed"
                                    aria-expanded="false">Click
                                    here to login</a></span>
                        </div>
                        <div class="panel-collapse collapse login_form" id="loginform">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have shopped with us before, please enter your details
                                    below. If you are a new customer, please proceed to the Billing &amp; Shipping
                                    section.
                                </p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="Username Or Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="checkbox"
                                                    id="remember" value="">
                                                <label class="form-check-label" for="remember"><span>Remember
                                                        me</span></label>
                                            </div>
                                        </div>
                                        <a href="#">Forgot password?</a>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-md" name="login">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="toggle_info">
                            <span><i class="fi-rs-label mr-10"></i><span class="text-muted">Have a coupon?</span> <a
                                    href="#coupon" data-bs-toggle="collapse" class="collapsed"
                                    aria-expanded="false">Click
                                    here to enter your code</a></span>
                        </div>
                        <div class="panel-collapse collapse coupon_form " id="coupon">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have a coupon code, please apply it below.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Coupon Code...">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn  btn-md" name="login">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-12">
                        <div class="divider mt-50 mb-50"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-25">
                            <h4>Billing Details</h4>
                        </div>
                        <form method="post">
                            <div class="form-group">
                                <input type="text" required="" wire:model="fname" placeholder="First name *">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" wire:model="lname" placeholder="Last name *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" wire:model="company" placeholder="Company Name">
                            </div>
                            {{-- <div class="form-group">
                                <div class="custom_select">
                                    <select class="form-control select-active">
                                        <option value="">Select an option...</option>
                                        <option value="AX">Aland Islands</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <input type="text" wire:model="address" required="" placeholder="Address *">
                            </div>
                            <div class="form-group">
                                <input type="text" wire:model="s_address" required=""
                                    placeholder="Address line2">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" wire:model="city" placeholder="City / Town *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" wire:model="state" placeholder="State / County *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" wire:model="zipcode" placeholder="Postcode / ZIP *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" wire:model="phone" placeholder="Phone *">
                            </div>
                            <div class="form-group">
                                <input required="" type="text" wire:model="email" placeholder="Email address *">
                            </div>

                            {{-- <div class="form-group">
                                <div class="checkbox">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="createaccount">
                                        <label class="form-check-label label_info" data-bs-toggle="collapse"
                                            href="#collapsePassword" data-target="#collapsePassword"
                                            aria-controls="collapsePassword" for="createaccount"><span>Create an
                                                account?</span></label>
                                    </div>
                                </div>
                            </div>
                            <div id="collapsePassword" class="form-group create-account collapse in">
                                <input required="" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="ship_detail">
                                <div class="form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox"
                                                id="differentaddress">
                                            <label class="form-check-label label_info" data-bs-toggle="collapse"
                                                data-target="#collapseAddress" href="#collapseAddress"
                                                aria-controls="collapseAddress" for="differentaddress"><span>Ship to a
                                                    different address?</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseAddress" class="different_address collapse in">
                                    <div class="form-group">
                                        <input type="text" required="" name="fname"
                                            placeholder="First name *">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" required="" name="lname"
                                            placeholder="Last name *">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="text" name="cname"
                                            placeholder="Company Name">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom_select">
                                            <select class="form-control select-active">
                                                <option value="">Select an option...</option>
                                                <option value="AX">Aland Islands</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="billing_address" required=""
                                            placeholder="Address *">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="billing_address2" required=""
                                            placeholder="Address line2">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="text" name="city"
                                            placeholder="City / Town *">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="text" name="state"
                                            placeholder="State / County *">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="text" name="zipcode"
                                            placeholder="Postcode / ZIP *">
                                    </div>
                                </div>
                            </div> --}}

                            <div class="mb-20">
                                <h5>Additional information</h5>
                            </div>
                            <div class="form-group mb-30">
                                <textarea rows="5" wire:model="note" placeholder="Order notes"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::content() as $item)
                                            <tr>
                                                <td class="image product-thumbnail">
                                                    @if ($item->options->image)
                                                        <img src="{{ url('images/' . $item->options->image) }}"
                                                            alt="Error">
                                                    @else
                                                        <img src="{{ url('images/deflaut_product.png') }}"
                                                            alt="Error">
                                                    @endif
                                                </td>
                                                <td><i class="ti-check-box font-small text-muted mr-10"></i>
                                                    <h5><a href="product-details.html">{{ $item->name }}</a></h5>
                                                    <span class="product-qty">x {{ $item->qty }}</span>
                                                </td>
                                                <td>{{ number_format($item->subtotal, 0, '', ',') }} VND</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th>SubTotal</th>
                                            <td class="product-subtotal" colspan="2">{{ Cart::subtotal() }} VND</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td colspan="2"><em>Free Shipping</em></td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td colspan="2" class="product-subtotal"><span
                                                    class="font-xl text-brand fw-900">{{ Cart::subtotal() }} VND</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            <div class="payment_method">
                                <div class="mb-25">
                                    <h5>Payment</h5>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio"
                                            name="payment_option" id="exampleRadios3" wire:model="payment_method">
                                        <label class="form-check-label" for="exampleRadios3"
                                            data-bs-toggle="collapse" data-target="#cashOnDelivery"
                                            aria-controls="cashOnDelivery">Thanh toán khi nhận hàng</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio"
                                            name="payment_option" id="exampleRadios4" wire:model="payment_method">
                                        <label class="form-check-label" for="exampleRadios4"
                                            data-bs-toggle="collapse" data-target="#cardPayment"
                                            aria-controls="cardPayment">Trả qua Card / Visa</label>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio"
                                            name="payment_option" id="exampleRadios5" wire:model="payment_method">
                                        <label class="form-check-label" for="exampleRadios5"
                                            data-bs-toggle="collapse" data-target="#paypal"
                                            aria-controls="paypal">Trả qua Paypal</label>
                                    </div>
                                    {{-- <div class="custome-radio">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <div class="custome-checkbox">
                                                    <input class="form-check-input" type="radio"
                                                        name="payment_option" id="createaccount">
                                                    <label class="form-check-label label_info"
                                                        data-bs-toggle="collapse" href="#collapsePassword"
                                                        data-target="#collapsePassword"
                                                        aria-controls="collapsePassword"
                                                        for="createaccount"><span>Momo</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapsePassword" class="form-group create-account collapse in">
                                            <img src="{{ url('images/momo.jpg') }}" style="width:150px" alt="">
                                            <p class="">Vui lòng quét mã để thanh toán.</p>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <a href="#" class="btn btn-fill-out btn-block mt-30">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12" style="text-align: center">
                    <p style="font-size:25px;">Your cart is emty!</p>
                    <p style="padding:15px 0">Add item to it now.</p>
                    <a href="{{ route('shop.component') }}" class="checkout-cart">Shop Now</a>
                </div>
            </div>
        @endif
    </section>
</main>
