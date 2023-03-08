<div>
    <style>
        nav svg {
            height: 20px;
        }

        .input-search {
            border: 1px solid #e3e6f0;
            height: 33px;
            border-radius: 0.2rem;
        }

        .search {
            padding-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .show-less {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
        }

        .test {
            border: 1px solid #e3e6f0;
        }

        .test td {
            border: none;
        }
    </style>

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table
            below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                <a href="{{ route('admin.addproduct') }}" class="btn btn-primary" role="button">
                    Create a new Product
                </a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    {{-- Search --}}
                    <div class="search">
                        <div class="input-group" style="height:113px">
                            <div class="form-outline">
                                <label class="form-label">Show</label>
                                <select wire:model="pagesize" class="form-control">
                                    <option value="5" selected>5 per page</option>
                                    <option value="10">10 per page</option>
                                    <option value="25">25 per page</option>
                                    <option value="50">50 per page</option>
                                    <option value="100">100 per page</option>
                                </select>
                                <select wire:model="sorting" class="form-control" style="margin-top:5px">
                                    <option value="deflaut" selected>Nổi bật</option>
                                    <option value="price-asc">Giá từ thấp đến cao</option>
                                    <option value="price-desc">Giá từ cao đến thấp</option>
                                    {{-- <option value="phone">Điện thoại</option>
                                    <option value="laptop">Laptop</option> --}}
                                </select>
                            </div>
                        </div>
                        <div class="input-group" style="height:113px">
                            <div class="form-outline">
                                <label class="form-label" for="form1">Search</label>
                                <input id="search-focus" wire:model="search" type="search" id="form1"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    {{-- Table --}}
                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @if ($products->count() > 0)
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá sản phẩm</th>
                                    <th>Ảnh sản phẩm</th>
                                    <th>Mô tả</th>
                                    <th>Loại sản phẩm</th>
                                    <th>Slug</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr class="test">
                                        <td>{{ $item->id }}</td>
                                        <td class="show-less">{{ $item->name }}</td>
                                        <td>{{ number_format($item->price, 0, '', ',') }} VND</td>
                                        <td>
                                            @if (isset($item->image))
                                                <div style="height:8rem;overflow:scroll">
                                                    @foreach ($item->image as $img)
                                                        <img src="{{ url('images/' . $img) }}" alt=""
                                                            style="width:6rem;padding:2px">
                                                    @endforeach
                                                </div>
                                            @else
                                                <img src="{{ url('images/deflaut/deflaut_product.png') }}" alt=""
                                                    style="width:6rem;padding:2px">
                                            @endif
                                        </td>
                                        <td class="show-less">{!! $item->description !!}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td class="show-less">{{ $item->slug }}</td>
                                        <td>
                                            <a href="{{ route('admin.editproduct', $item->id) }}"
                                                class="btn btn-danger">Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a type="submit" wire:click.prevent="deleteProduct({{ $item->id }})"
                                                class="btn btn-danger">Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <h5 class="text-danger">Không tìm thấy sản phẩm...</h5>
                        @endif
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
