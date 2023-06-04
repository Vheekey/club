<div class="container">
    <div class="card text-center mt-5">
        <div class="card-header">

            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item" wire:ignore>
                    <a class="nav-link active" href="#login" data-bs-toggle="pill">Login</a>
                </li>
                <li class="nav-item" wire:ignore>
                    <a class="nav-link" href="#forgot" data-bs-toggle="pill">Forgot Password</a>
                </li>
            </ul>
        </div>
        <div class="card-body gy-2 gx-3 align-items-center">
            <div class="tab-content">
                <div wire:ignore.self class="row gy-2 gx-3 tab-pane  active" id="login">
                    @include('layouts.notify')

                    <div class="col-md-6 offset-md-3 mb-3 gy-2 gx-3">
                        <h5 class="card-title theme-text-color mb-lg-5 fs-4 text-wrap fw-semibold mt-5">
                            Welcome, please login to continue
                        </h5>

                        <form wire:submit.prevent="submit" class="theme-text-color">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label"> Email </label>
                                <input type="text" wire:model="email" class="form-control" width="">
                                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label"> Password </label>
                                <input type="password" wire:model="password" class="form-control">
                                @error('password') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn theme-btn"> Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <livewire:auth.forgot-password/>
            </div>
        </div>
        <div class="card-footer text-muted">
            Knowing others is intelligence; knowing yourself is true wisdom.
        </div>
    </div>
</div>
