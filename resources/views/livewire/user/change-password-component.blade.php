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
                                            @if (Session::has('message_success'))
                                                <div class="alert alert-success">{{ Session::get('message_success') }}</div>
                                            @endif
                                            @if (Session::has('message_error'))
                                                <div class="alert alert-danger">{{ Session::get('message_error') }}</div>
                                            @endif
                                            <form method="post">
                                                <div class="row">                                                  
                                                    <div class="form-group col-md-12">
                                                        <label>Current Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square"
                                                            type="password" wire:model="current_password">
                                                        @error('current_password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>New Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square"
                                                            name="password" type="password" wire:model="password">
                                                        @error('password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Repeat Password <span class="required">*</span></label>
                                                        <input required="" class="form-control square"
                                                            name="password_confirmation" type="password"
                                                            wire:model="password_confirmation">
                                                        @error('password_confirmation')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" wire:click.prevent="changePw"
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
