<h4>Home Page</h4>
@if (Route::has('login'))
    @auth
        @if (Auth::user()->utype === 'ADM')
            {{-- Admin --}}
            <header>
                <div class="pos-f-t">
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-dark p-4">
                            <a href="{{ route('admin.dashboard') }}">
                                <h6 class="text-white">Admin Dashboard</h6>
                            </a>
                        </div>
                    </div>
                    <nav class="navbar navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                </div>
            </header>
        @else
            {{-- User --}}
            <header>
                <div class="pos-f-t">
                    <div class="collapse" id="navbarToggleExternalContent">
                        <div class="bg-dark p-4">
                            <a href="{{ route('user.dashboard') }}">
                                <h6 class="text-white">User Dashboard</h6>
                            </a>
                        </div>
                    </div>
                    <nav class="navbar navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    Hello {{ Auth::user()->name }}
                    <div class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit(); "
                            role="button">
                            <i class="fas fa-sign-out-alt">Log Out</i>
                            {{-- {{ __('Log Out') }} --}}
                        </a>
                    </div>
                </form>
            </header>
        @endif
    @else
        <header>
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                        {{-- <h4 class="text-white">Collapsed content</h4>
                        <span class="text-muted">Toggleable via the navbar brand.</span> --}}
                        <a href="{{ route('register') }}">
                            <h6 class="text-white">Register</h6>
                        </a>
                        <a href="{{ route('login') }}">
                            <h6 class="text-white">Login</h6>
                        </a>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </header>
    @endif
    @endif
