<div>
    @extends('layouts.home-base')

    @section('page')
        <div class="">
            <div class="row mb-5">
                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header theme-text-color text-lg-center fw-bolder"> Upcoming Events</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Event</th>
                                        <th>Theme</th>
                                        <th>Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>28-09-2023</th>
                                        <td>Meeting</td>
                                        <td>LLP Payment</td>
                                        <td>20:00 WAT</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header theme-text-color text-lg-center fw-bolder"> Announcement</div>
                        <div class="card-body">
                            <div class="">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                Title Item #1
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to demonstrate the <code>.accordion-flush</code> class. This is
                                                the first item's accordion body.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Title Item #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                             data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to demonstrate the <code>.accordion-flush</code> class. This is
                                                the second item's accordion body. Let's imagine this being filled with
                                                some actual content.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <div class="card text-center">
                        <div class="card-header theme-text-color text-lg-center fw-bolder"> Members</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover theme-text-color">
                                    <thead class="theme-btn">
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $x = 1; @endphp

                                    @foreach($users as $user)

                                        <tr class="text-center">
                                            <th scope="row">{{ $x  }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email  }}</td>
                                            <td>{{ $user->phone ?: '080445566789'  }}</td>
                                            <td>{{ ucfirst($user->role) ?: 'Member'  }}</td>
                                        </tr>

                                        @php $x++; @endphp
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

</div>
