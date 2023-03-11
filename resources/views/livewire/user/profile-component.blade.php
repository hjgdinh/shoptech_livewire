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
                                            @if (Session::has('message'))
                                                <div class="alert alert-success">{{ Session::get('message') }}
                                                </div>
                                            @endif
                                            <form method="post">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label>Name <span class="required">*</span></label>
                                                        <input required="" class="form-control square" type="text"
                                                            wire:model="name">
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Email <span class="required">*</span></label>
                                                        <input required="" class="form-control square" type="email"
                                                            wire:model="email">
                                                        @error('email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Address <span class="required">*</span></label>
                                                        <input required="" class="form-control square" type="text"
                                                            wire:model="address">
                                                        @error('address')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Phone <span class="required">*</span></label>
                                                        <input required="" class="form-control square" type="number"
                                                            wire:model="phone">
                                                        @error('phone')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label">Avatar:(<span
                                                                class="ss_red">*</span>)</label>
                                                        <input type="file" wire:model="avatar" class="form-control"
                                                            required style="padding:10px 20px">
                                                        <div wire:loading wire:target="avatar"
                                                            style="font-size:20px;color:green">Uploading...</div>
                                                        @error('avatar')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                        <div id="files-area" class="mt-xl-4">
                                                            <div id="filesList">
                                                                @if ($avatar)
                                                                    <div id="files-names">Preview Avatar:</div>
                                                                    <img src="{{ $avatar->temporaryUrl() }}"
                                                                        style="height:6rem">
                                                                @else
                                                                    <div id="files-names">Current Avatar:</div>
                                                                    <img style="height: 6rem"
                                                                        src="{{ $state['avatar_url'] ?? '' }}">
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" wire:click.prevent="updateProfile"
                                                            class="btn btn-fill-out submit">Save</button>
                                                        <a class="btn btn-fill-out submit"
                                                            href="{{ route('user.dashboard') }}">Back</a>
                                                    </div>
                                                </div>
                                            </form>
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
