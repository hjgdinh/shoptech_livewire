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
                <a href="{{ route('admin.adduser') }}" class="btn btn-primary" role="button">
                    Create a new User
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
                                    {{-- <option value="deflaut" selected>N???i b???t</option> --}}
                                    <option value="price-asc" selected>ID t??? th???p ?????n cao</option>
                                    <option value="price-desc">ID t??? cao ?????n th???p</option>
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
                        @if ($users->count() > 0)
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>T??n</th>
                                    <th>Email</th>
                                    <th>???nh</th>
                                    <th>Gi???i t??nh</th>
                                    <th>S??T</th>
                                    <th>?????a ch???</th>
                                    <th>Quy???n</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    @if ($item->utype == 'USR')
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                @if (isset($item->avatar))
                                                    <img class="img-profile rounded-circle"
                                                        style="height: 5rem;border-radius:1px !important"
                                                        src="{{ url('images/' . $item->avatar) }}">
                                                @else
                                                    <img class="img-profile rounded-circle"
                                                        style="height: 5rem;border-radius:1px !important"
                                                        src="{{ url('images/deflaut/deflaut_avatar.png') }}">
                                                @endif
                                            </td>
                                            <td>
                                                @switch($item->gender)
                                                    @case(1)
                                                        Nam
                                                    @break

                                                    @case(2)
                                                        N???
                                                    @break

                                                    @default
                                                @endswitch
                                            </td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->utype }}</td>
                                            <td>
                                                <a href="{{ route('admin.edituser', ['id' => $item->id]) }}"
                                                    class="btn btn-danger">Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a type="submit" wire:click.prevent="deleteUser({{ $item->id }})"
                                                    class="btn btn-danger">Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @else
                                    @endif
                                @endforeach
                            @else
                                <h5 class="text-danger">Kh??ng t??m th???y ng?????i d??ng...</h5>
                        @endif
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
