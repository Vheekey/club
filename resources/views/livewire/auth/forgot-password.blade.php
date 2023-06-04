<div wire:ignore.self id="forgot" class="row gy-2 tab-pane fade">
    @include('layouts.notify')

    <div class="col-md-6 offset-md-3 mb-3 gy-2 gx-3">
        <h5 class="card-title theme-text-color mb-lg-5 fs-4 text-wrap fw-semibold mt-5">
            Input email to reset your password
        </h5>

        <form wire:submit.prevent.default="resetPassword" class="theme-text-color">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label"> Email </label>
                <input type="text" wire:model="resetEmail" class="form-control" width="">
                @error('resetEmail') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn theme-btn"> Reset Password </button>
            </div>

            {{--                    <div wire:loading.delay>...</div>--}}

        </form>
    </div>
</div>
{{--The world belongs to you--}}
