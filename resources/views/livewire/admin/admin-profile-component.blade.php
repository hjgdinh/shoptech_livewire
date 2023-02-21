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
                    For more information about DataTables, please visit the official DataTables documentation

                    <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary" role="alert">Profile Admin</h6>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif
                        <div class="table-responsive">
                            <form enctype="multipart/form-data" wire:submit.prevent="updateAdminProfile">
                                <input class="form-control" wire:model="user_id" type="hidden" placeholder="ID">
                                <label>Name: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="name"
                                        placeholder="Enter your name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label>Email: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="email" wire:model="email"
                                        placeholder="Enter your email" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label>Password: (<span class="ss_red">*</span>)</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="password" wire:model="password"
                                        placeholder="Enter your password" required>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label>Phone:</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="phone"
                                        placeholder="Enter your phone number">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <label>Address:</label>
                                <label for="" style="width: 100%;">
                                    <input class="form-control" type="text" wire:model="address"
                                        placeholder="Enter your address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div>
                                    <label>Gender: (<span class="ss_red">*</span>)</label>
                                    <label>Nam</label>
                                    <input name="gender" type="radio" value="1" wire:model="gender">
                                    <label>Nữ</label>
                                    <input name="gender" type="radio" value="2" wire:model="gender">
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div style="display: flex;align-items: flex-start;justify-content: space-between;">
                                    <div>
                                        <label for="">
                                            <div class=" form-group">
                                                <label for="attachment" class="upload__btn">
                                                    <label class="form-label">New Avatar:(<span class="ss_red">*</span>)</label>
                                                    <input type="file" id="attachment" wire:model="avatar"
                                                        class="form-control" style="padding:4px">
                                                    <div wire:loading wire:target="avatar"
                                                        style="font-size:20px;color:green">Uploading...</div>
                                                    @error('avatar')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                                <div id="files-area" class="mt-xl-4">
                                                    <div id="filesList">
                                                        @if ($avatar)
                                                            <div id="files-names">Preview Avatar:</div>
                                                            <img src="{{ $avatar->temporaryUrl() }}"
                                                                style="height:8rem">
                                                        @else
                                                            <div id="files-names">Current Avatar:</div>
                                                            <img style="height: 8rem"
                                                                src="{{ $state['avatar_url'] ?? '' }}">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div style="margin-top:10px">
                                    <button class="btn btn-primary" type="submit">
                                        Submit
                                    </button>
                                    <a class="btn btn-primary" href="{{ route('admin.dashboard') }}">
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
