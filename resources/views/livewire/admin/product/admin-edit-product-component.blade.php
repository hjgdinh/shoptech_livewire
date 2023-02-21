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
                        @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                        <div class="table-responsive">
                            <form enctype="multipart/form-data" wire:submit.prevent="updateProduct()">
                                <input class="form-control" wire:model="product_id" type="hidden" placeholder="ID">
                                <label>Tên: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="name" wire:keyup="autoSlug"
                                        placeholder="Enter your name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label>Slug: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="slug" placeholder=""
                                        required>
                                </label>
                                <label>Giá: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="number" wire:model="price"
                                        placeholder="Enter your price" required>
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label>Mô tả: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="description"
                                        placeholder="Enter your description" required>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label>Loại sản phẩm: (<span class="ss_red">*</span>)</label>
                                <select wire:model="category_id" class="form-control">
                                    <option value="" disabled>----- Loại -----</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}" disabled>{{ $item->name }}</option>
                                        @foreach ($item->children as $child)
                                            <option value="{{ $child->id }}">-- {{ $child->name }}</option>
                                            @foreach ($child->children as $schild)
                                                <option value="{{ $schild->id }}">--- {{ $schild->name }}</option>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </select>
                                <label for="">
                                    <div class=" form-group">
                                        <label for="attachment" class="upload__btn">
                                            <label class="form-label mt-4">Profile Photo: (<span
                                                    class="ss_red">*</span>)</label>
                                            <input type="file" wire:model="image" id="attachment"
                                                class="form-control" multiple style="padding:4px" required>
                                            @error('image.*')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </label>
                                        <div id="files-area" class="mt-xl-4">
                                            <div id="filesList">                                         
                                                @if ($image)
                                                    <div id="files-names">Preview image:</div>
                                                    @foreach ($image as $images)
                                                        <img style="height: 8rem" src="{{ $images->temporaryUrl() }}">
                                                    @endforeach
                                                @else
                                                    <div id="files-names">Current image:</div>
                                                    <img style="height: 8rem" src="{{ $state['product_url'] ?? '' }}"> 
                                                    @foreach ($state as $item)
                                                        {{ $item['product_url'] ?? '' }}
                                                    @endforeach                                                     
                                                @endif                                                                                               
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <br>
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                </button>
                                <a class="btn btn-primary" href="{{ route('admin.product') }}">
                                    Back
                                </a>
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
