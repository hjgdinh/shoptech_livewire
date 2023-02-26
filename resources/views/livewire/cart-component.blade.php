<div class="space-medium" bis_skin_checked="1">
    <div class="container" bis_skin_checked="1">
        <div class="row" bis_skin_checked="1">
            @if (Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" bis_skin_checked="1">
                <div class="box" bis_skin_checked="1">
                    <div class="box-head" bis_skin_checked="1">
                        <h3 class="head-title">My Cart ({{ Cart::count() }})</h3>
                    </div>
                    <!-- cart-table-section -->
                    <div class="box-body" bis_skin_checked="1">
                        <div class="table-responsive" bis_skin_checked="1">
                            <div class="cart" bis_skin_checked="1">
                                @if (Cart::count() > 0)
                                    <table class="table table-bordered ">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span>Item</span>
                                                </th>
                                                <th>
                                                    <span>Price</span>
                                                </th>
                                                <th>
                                                    <span>Quantity</span>
                                                </th>
                                                <th>
                                                    <span>Total</span>
                                                </th>
                                                <th>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Cart::content() as $item)
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            <img src="./images/cart_product_2.png" alt=""></a>
                                                        <span><a href="#">{{ $item->name }}</a></span>
                                                    </td>
                                                    <td>{{ $item->price }} VND</td>
                                                    <td>{{ $item->quantity }} VND a</td>
                                                    <td>
                                                        <div class="product-quantity" bis_skin_checked="1">
                                                            <div class="quantity" bis_skin_checked="1">
                                                                <input type="number" class="input-text qty text"
                                                                    step="1" min="1" max="6"
                                                                    wire:model="quantity.{{ $item->id }}" value="{{ $item->quantity }}" title="Qty"
                                                                    size="4" pattern="[0-9]*">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $item->subtotal() }} VND</td>
                                                    <th scope="row">
                                                        <a href="#" wire:click="destroy('{{ $item->rowId }}')"
                                                            class="btn-close">
                                                            <i class="fa fa-times-circle-o"></i></a>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <p>Không có gì trong giỏ hàng</p>
                                @endif
                            </div>
                            <!-- /.cart-table-section -->
                        </div>
                    </div>
                </div>
                <a href="{{ route('shop.component') }}" class="btn-link"><i class="fa fa-angle-left"></i> back to
                    shopping</a>
            </div>
            <!-- cart-total -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" bis_skin_checked="1">
                <div class="box mb30" bis_skin_checked="1">
                    <div class="box-head" bis_skin_checked="1">
                        <h3 class="head-title">Price Details</h3>
                    </div>
                    <div class="box-body" bis_skin_checked="1">
                        <div class=" table-responsive" bis_skin_checked="1">
                            <div class="pay-amount " bis_skin_checked="1">
                                <table class="table mb20">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <span>Price ({{ Cart::count() }} items)</span>
                                            </th>
                                            <td>{{ Cart::total() }} VND</td>
                                            {{-- <td>{{ Cart::tax() }} VND</td> --}}
                                        </tr>
                                        <tr>
                                            <th>
                                                <span>Delivery Charges</span>
                                            </th>
                                            <td><strong class="text-green">Free</strong></td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <span>Tax</span>
                                            </th>
                                            <td><strong class="text-green">Free</strong></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <span class="mb0" style="font-weight: 700;">Amount Payable</span>
                                            </th>
                                            <td style="font-weight: 700; color: #1c1e1e; ">
                                                {{ Cart::total() }} VND</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-primary btn-block">Proceed To Checkout</button>
                        </div>
                    </div>
                </div>
                <!-- coupon-section -->
                <div class="box mb30" bis_skin_checked="1">
                    <div class="box-head" bis_skin_checked="1">
                        <h3 class="head-title">Coupons &amp; Offers</h3>
                    </div>
                    <div class="box-body" bis_skin_checked="1">
                        <form>
                            <div class="coupon-form" bis_skin_checked="1">
                                <input type="text" name="coupon_code" class="form-control" id="coupon_code"
                                    value="" placeholder="Coupon code">
                                <input type="submit" class="btn btn-primary btn-block" name="apply_coupon"
                                    value="Apply coupon">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.coupon-section -->
            </div>
        </div>
        <!-- /.cart-total -->
    </div>
</div>
