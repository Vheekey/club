<div>
    @extends('layouts.home-base')

    @section('page')

        <div>

            <div class="row jumbotron text-center">
                <h5 class="card-title text-center fs-4 text-wrap fw-semibold mt-5">
                    Schedule a Meeting
                </h5>
                <livewire:admin.schedule-meeting/>

                <div class="mt-3 mb-3 table-responsive googleCalendar">
                    <iframe
                        src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23616161&ctz=Africa%2FLagos&showTabs=0&showPrint=0&showNav=1&showDate=1&showTitle=1&title=Club%20Meetings&showCalendars=0&showTz=1&src=aWMuaW50ZWdyYXRpb24wQGdtYWlsLmNvbQ&color=%23039BE5"
                        style="border:solid 1px #777"
                        width="800"
                        height="600"
                        frameborder="0"
                        scrolling="yes">

                    </iframe>

                </div>
                <small> If your happiness depends on money, you will never be happy with yourself. </small>
            </div>

        </div>

        @livewireScripts
    @endsection
</div>
