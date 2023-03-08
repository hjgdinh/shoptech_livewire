<div id="wrapper">
    <style>
        .varant_form {
            padding: 5px;
            width: 33.3333%;
        }

        .form-width-50 {
            padding: 0 5px;
            width: 50%;
        }
    </style>
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
                        <h6 class="m-0 font-weight-bold text-primary" role="alert">Create Product</h6>
                    </div>
                    <div class="card-body">
                        {{-- @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif --}}
                        <div class="table-responsive">
                            <form method="post" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                                @csrf
                                <div style="display: flex;flex-wrap: wrap;">
                                    <div class="form-width-50">
                                        <label>Tên: (<span class="ss_red">*</span>)</label>
                                        <label for="" style="width: 100%;">
                                            <input class="form-control" type="text" wire:model="name"
                                                wire:keyup="autoSlug" placeholder="Enter your name" required>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </label>
                                    </div>
                                    <div class="form-width-50">
                                        <label>Slug: (<span class="ss_red">*</span>)</label>
                                        <label for="" style="width: 100%;">
                                            <input class="form-control" type="text" wire:model="slug" placeholder=""
                                                required>
                                            @error('slug')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </label>
                                    </div>
                                    <div class="form-width-50">
                                        <label>Giá: (<span class="ss_red">*</span>)</label>
                                        <label for="" style="width: 100%;">
                                            <input class="form-control" type="number" wire:model="price"
                                                placeholder="Enter your price" required>
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </label>
                                    </div>
                                    <div class="form-width-50">
                                        <label>Loại sản phẩm: (<span class="ss_red">*</span>)</label>
                                        <select wire:model="category_id" class="form-control">
                                            <option value="" disabled>----- Loại -----</option>
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}" disabled>{{ $item->name }}
                                                </option>
                                                @foreach ($item->children as $child)
                                                    <option value="{{ $child->id }}">-- {{ $child->name }}</option>
                                                    @foreach ($child->children as $schild)
                                                        <option value="{{ $schild->id }}">--- {{ $schild->name }}
                                                        </option>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-width-50" style="width:100%">
                                        <label>Mô tả: (<span class="ss_red">*</span>)</label>
                                        <label for="" style="width: 100%;" wire:ignore>
                                            <textarea id="description" class="form-control" 
                                                wire:model="description" required>
                                            </textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </label>
                                    </div>
                                    <div class="form-width-50" style="width:100%">
                                        <label for="">
                                            <div class=" form-group">
                                                <label for="attachment" class="upload__btn">
                                                    <label class="form-label mt-4">Product:(<span
                                                            class="ss_red">*</span>)</label>
                                                    <input type="file" wire:model="image" id="example-file"
                                                        class="form-control" multiple style="padding:4px" required>
                                                    <div wire:loading wire:target="image"
                                                        style="font-size:20px;color:green">
                                                        Uploading...
                                                    </div>
                                                    @error('image.*')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                                <div id="files-area" class="mt-xl-4">
                                                    <div id="filesList">
                                                        @if ($image)
                                                            <div id="files-names">Preview Product:</div>
                                                            <div style="display: flex">
                                                                @foreach ($image as $images)
                                                                    <div wire:key="{{ $loop->index }}"
                                                                        style="padding: 0 15px 0 0">
                                                                        <p style="height:10px;border-radius:1px solid black"
                                                                            wire:click="removeMe({{ $loop->index }})">
                                                                            <i class="far fa-times-circle"
                                                                                style="color: orangered;"></i>
                                                                        </p>
                                                                        <img style="height: 5rem"
                                                                            src="{{ $images->temporaryUrl() }}">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div style="display: flex;padding: 10px 0;font-size: 18px;">
                                    <input wire:model="varant" style="margin-right: 6px;" type="checkbox"
                                        value="1">Biến thể<br>
                                </div>
                                @if ($varant)
                                    <div style="display: flex;flex-wrap: wrap;">
                                        <div class="varant_form">
                                            <label>Màn hình:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="monitor"
                                                    @if ($item->monitor) placeholder="{{ $item->monitor }}" 
                                                        @else placeholder="Enter your description" @endif
                                                    value="{{ old('monitor') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Hệ điều hành:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="operating"
                                                    placeholder="Enter your description"
                                                    value="{{ old('operating') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Camera sau:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="camera_behind"
                                                    placeholder="Enter your description"
                                                    value="{{ old('camera_behind') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Camera trước:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="camera_front"
                                                    placeholder="Enter your description"
                                                    value="{{ old('camera_front') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Chip:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="chip"
                                                    placeholder="Enter your description" value="{{ old('chip') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Ram:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="ram"
                                                    placeholder="Enter your description" value="{{ old('ram') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Dung lượng lưu trữ:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="storage"
                                                    placeholder="Enter your description"
                                                    value="{{ old('storage') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Sim:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="sim"
                                                    placeholder="Enter your description" value="{{ old('sim') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Pin, Sạc:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="battery"
                                                    placeholder="Enter your description"
                                                    value="{{ old('battery') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Cpu:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="cpu"
                                                    placeholder="Enter your description" value="{{ old('cpu') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Ổ cứng:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="drive"
                                                    placeholder="Enter your description" value="{{ old('drive') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Card màn hình:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="graphic"
                                                    placeholder="Enter your description"
                                                    value="{{ old('graphic') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Cổng kết nối:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="connector"
                                                    placeholder="Enter your description"
                                                    value="{{ old('connector') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Thiết kế:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="design"
                                                    placeholder="Enter your description" value="{{ old('design') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Kích thước, khối lượng:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="size"
                                                    placeholder="Enter your description" value="{{ old('size') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="varant_form">
                                            <label>Thời điểm ra mắt:</label>
                                            <label for="" style="width: 100%;">
                                                <input class="form-control" type="text" wire:model="release_time"
                                                    placeholder="Enter your description"
                                                    value="{{ old('release_time') }}">
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                @endif
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

@push('scripts')
    <script>
        $('#description').summernote({
            placeholder: 'Enter your description',
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $edittable) {
                    @this.set('description', contents)
                }
            }
        });
    </script>
@endpush
