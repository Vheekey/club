
<div class="col-md-12">
    @php $alertClass = session()->has('message') ? 'success' : 'danger'; @endphp

@if (session()->has('message') || session()->has('error'))
        <div class="toast-container position-static">
            <div class="toast show alert-{{ $alertClass }}" role="alert" aria-live="assertive" aria-atomic="true" id="myToast">
                <div class="toast-header">
                  <strong class="me-auto text-{{ $alertClass }}"><i data-feather="bell"></i> Notification</strong>
                    <small>Just now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body text-{{ $alertClass }}">
                    {{ session('message') ?:  session('error') }}
                </div>
            </div>
        </div>

        <script>
            feather.replace();

            setTimeout(() => {
                $("#myToast").toast('hide').fadeOut('slow');
            }, 10000);

        </script>
    @endif

</div>

