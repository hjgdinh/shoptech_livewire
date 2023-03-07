<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ route('shop.component') }}" rel="nofollow">Home</a>
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
                                            <i class="fi-rs-arrow-left mr-10"></i>Back
                                        </a>
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
                                                        <th>Tên SP</th>
                                                        <th>Ảnh SP</th>
                                                        <th>Giá (VND)</th>
                                                        <th>SL</th>
                                                        <th>Tổng (VND)</th>
                                                        <th>Mua lúc</th>
                                                        {{-- <th>Updated</th> --}}
                                                    </tr>
                                                </thead>
                                                @foreach ($order->orderItem as $item)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->product->name }}</td>
                                                            <td>
                                                                @if (isset($item->product->image))
                                                                    <img src="{{ url('images/' . $item->product->image[0]) }}"
                                                                        alt="" style="width:4rem;padding:2px">
                                                                @else
                                                                    <img src="{{ url('images/deflaut/deflaut_product.png') }}"
                                                                        alt="" style="width:4rem;padding:2px">
                                                                @endif
                                                            </td>
                                                            <td>{{ number_format($item->price, 0, '', ',') }}</td>
                                                            <td>{{ $item->quantity }}</td>
                                                            <td>{{ number_format($item->quantity * $item->price, 0, '', ',') }}</td>
                                                            <td>{{ $item->created_at }}</td>
                                                            {{-- <td>{{ $item->updated_at }}</td> --}}
                                                        </tr>
                                                    </tbody>
                                                @endforeach
                                            </table>
                                            <div style="padding: 15px 0;">
                                                <p>Tổng SP: {{ $order->total }} VND</p>
                                                <p>Shipping: Free Shipping</p>
                                                <p>Tổng: {{ $order->total }} VND</p>
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
