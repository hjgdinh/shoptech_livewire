<div id="wrapper">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                        href="https://datatables.net">official DataTables documentation</a>.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary" role="alert">Edit Product</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Product Id</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Tổng</th>
                                        <th>Tạo lúc</th>
                                        <th>Cập nhật lúc</th>
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
                                                        <img src="{{ url('images/' . $img) }}" alt=""
                                                            style="width:4rem;padding:2px">
                                                    @endforeach
                                                @else
                                                    <img src="{{ url('images/deflaut_product.png') }}" alt=""
                                                        style="width:4rem;padding:2px">
                                                @endif
                                            </td>
                                            <td>{{ $item->quantity * $item->price }} VND</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>{{ $item->updated_at }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            <div>
                                <p>SubTotal: {{ $order->total }} VND</p>
                                <p>Shipping: Free Shipping</p>
                                <p>Total: {{ $order->total }} VND</p>
                            </div>
                            <a class="btn btn-primary" href="{{ route('admin.order') }}">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
</div>
