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
                        <h6 class="m-0 font-weight-bold text-primary" role="alert">Create Category</h6>
                    </div>
                    <div class="card-body">
                        {{-- @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif --}}
                        <div class="table-responsive">
                            <form method="post" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                                @csrf
                                <label>Tên: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="name" wire:keyup="autoSlug"
                                        placeholder="Enter your name" required>
                                </label>
                                <label>Slug: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="slug" placeholder=""
                                        required>
                                </label>
                                <label>Loại sản phẩm: (<span class="ss_red">*</span>)</label>
                                <select wire:model="parent_id" class="form-control">
                                    <option value="0">----- Cha -----</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @foreach ($item->children as $child)
                                                <option value="{{ $child->id }}">-- {{ $child->name }}</option>                                       
                                            @endforeach
                                    @endforeach
                                </select>
                                <div style="margin-top:10px">
                                    <button class="btn btn-primary" type="submit" >
                                        Submit
                                    </button>
                                    <a class="btn btn-primary" href="{{ route('admin.category') }}">
                                        Back
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
    </div>
</div>
