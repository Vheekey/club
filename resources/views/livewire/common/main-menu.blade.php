<div>
    <nav class="navbar navbar-dark bg-dark fixed-top" id="main-menu">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Club23</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end theme-text-color" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Hello, {{ auth()->user()->name ?: 'there' }}</h5>
                    <button type="button" class="btn-close theme-text-color" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body theme-text-color">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Finance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Documents</a>
                        </li>
                        @if(auth()->user()->role !== 'member')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Admin Actions
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" id="admin-actions">
                                @if(auth()->user()->role == 'chairman')
                                <li><a class="dropdown-item" href="{{ route('manage-meeting') }}" >Schedule Meeting</a></li>
{{--                                <li><button class="dropdown-item" wire:click.prevent="manageMeeting" >Schedule Meeting</button></li>--}}
                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Upload Documents</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Create Announcement</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Payments</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">User Actions</a></li>
                            </ul>
                            @endif

                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn theme-btn" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>
