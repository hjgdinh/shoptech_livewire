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
                {{-- <a href="{{ route('admin.addproduct') }}" class="btn btn-primary" role="button">
                    Create a new Product
                </a> --}}
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
                                    <option value="deflaut" selected>N???i b???t</option>
                                    <option value="price-asc">Gi?? t??? th???p ?????n cao</option>
                                    <option value="price-desc">Gi?? t??? cao ?????n th???p</option>
                                    {{-- <option value="phone">??i???n tho???i</option>
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
                        @if ($orders->count() > 0)
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>H??? t??n KH</th>
                                    <th>T??n c??ng ty</th>
                                    <th>?????a ch???</th>
                                    <th>?????a ch??? ph???</th>
                                    <th>Th??nh ph???</th>
                                    <th>Qu???c gia</th>
                                    <th>M?? b??u ??i???n</th>
                                    <th>S??T</th>
                                    <th>Email</th>
                                    <th>Ghi ch??</th>
                                    <th>T???ng ????n h??ng</th>
                                    <th>Tr???ng th??i</th>
                                    <th>Ph????ng th???c thanh to??n</th>
                                    {{-- <th>T???o l??c</th>
                                    <th>C???p nh???t l??c</th> --}}
                                    <th>Detail</th>
                                    <th colspan="2">Action</th>
                                    {{-- <th>Delete</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->last_name }} {{ $item->first_name }}</td>
                                        <td>{{ $item->company }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->s_address }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->zip }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->note }}</td>
                                        <td>{{ $item->total }} VND</td>
                                        <td>
                                            @switch($item->status)
                                                @case(1)
                                                    Ch??? duy???t
                                                @break

                                                @case(2)
                                                    Duy???t th??nh c??ng
                                                @break

                                                @case(3)
                                                    H???y h??ng
                                                @break

                                                @default
                                            @endswitch
                                        </td>
                                        <td>
                                            @switch($item->payment_method)
                                                @case(1)
                                                    Khi nh???n h??ng
                                                @break

                                                @case(2)
                                                    Card / Visa
                                                @break

                                                @case(3)
                                                    Paypal
                                                @break

                                                @default
                                            @endswitch
                                        </td>
                                        {{-- <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->updated_at }}</td> --}}
                                        <td>
                                            <a href="{{ route('admin.orderdetail', $item->id) }}"
                                                class="btn btn-danger">Detail
                                            </a>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success" data-toggle="dropdown" type="button">
                                                    Status
                                                </button>
                                                <ul class="dropdown-menu" style="min-width: 6rem">
                                                    <li style="padding: 5px 10px;"><a wire:click="updateStatus({{ $item->id }}, '2')">Giao h??ng </a></li>
                                                    <li style="padding: 5px 10px;"><a wire:click="updateStatus({{ $item->id }}, '3')">H???y h??ng </a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        {{-- <td>
                                            <a type="submit" wire:click.prevent="deleteProduct({{ $item->id }})"
                                                class="btn btn-danger">Delete
                                            </a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            @else
                                <h5 class="text-danger">Kh??ng t??m th???y s???n ph???m...</h5>
                        @endif
                        </tbody>
                    </table>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
