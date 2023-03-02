<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> My Account
            </div>
        </div>
    </div>
    <section class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="dashboard-menu">
                                <ul class="nav flex-column" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('user.dashboard') }}">
                                            <i class="fi-rs-shopping-bag mr-10"></i>Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('shop.component') }}">
                                            <i class="fi-rs-shopping-bag mr-10"></i>Shop</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content dashboard-content">
                                <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                    aria-labelledby="dashboard-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="mb-0">Hello {{ Auth::user()->name }}! </h5>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                        <th>Image</th>
                                                        <th>Total</th>
                                                        <th>Created</th>
                                                        {{-- <th>Updated</th> --}}
                                                    </tr>
                                                </thead>
                                                @foreach ($order->orderItem as $item)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $item->product_id }}</td>
                                                            <td>{{ $item->quantity }}</td>
                                                            <td>{{ $item->price }} VND</td>
                                                            <td>
                                                                @if (isset($item->product->image))
                                                                    @foreach ($item->product->image as $img)
                                                                        <img src="{{ url('images/' . $img) }}"
                                                                            alt=""
                                                                            style="width:4rem;padding:2px">
                                                                    @endforeach
                                                                @else
                                                                    <img src="{{ url('images/deflaut_product.png') }}"
                                                                        alt="" style="width:4rem;padding:2px">
                                                                @endif
                                                            </td>
                                                            <td>{{ $item->quantity * $item->price }} VND</td>
                                                            <td>{{ $item->created_at }}</td>
                                                            {{-- <td>{{ $item->updated_at }}</td> --}}
                                                        </tr>
                                                    </tbody>
                                                @endforeach
                                            </table>
                                            <div style="padding: 15px 0;">
                                                <p>SubTotal: {{ $order->total }} VND</p>
                                                <p>Shipping: Free Shipping</p>
                                                <p>Total: {{ $order->total }} VND</p>
                                            </div>
                                            <a class="btn btn-primary" href="{{ route('user.dashboard') }}">
                                                Back
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
