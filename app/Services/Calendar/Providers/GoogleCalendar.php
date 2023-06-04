<?php


namespace App\Services\Calendar\Providers;

use Carbon\Carbon;
use Livewire\Request;
use Spatie\GoogleCalendar\Event;


class GoogleCalendar implements \App\Services\Calendar\CalendarInterface
{

    /**
     * @var Event
     */
    private $event;

    public function __construct()
    {
        $this->event = new Event();
    }

    public function addEvent(array $request)
    {
        $request = (object)$request;
        $this->event->name = $request->title;
        $this->event->description = $request->description ?: 'Stuff to discuss';
        $this->event->startDateTime = Carbon::parse($request->starts);
        $this->event->endDateTime = $this->event->startDateTime->addMinutes($request->duration ?: 30);
        $this->prepareAttendees($request->email);
        $this->event->addMeetLink();
        $this->event->save();
    }

    public function getEvents(Request $request)
    {
        return Event::get();
    }

    public function updateEvent(Request $request)
    {
        $events = $this->getEvents();

        $firstEvent = $events->first();
        $firstEvent->name = 'updated name';
        $firstEvent->save();

        $firstEvent->update(['name' => 'updated again']);
    }

    public function deleteEvent(Request $request)
    {
        return $this->event->delete();
    }

    private function prepareAttendees(array $attendees)
    {
        foreach ($attendees as $attendee){
            $this->event->addAttendee([
                'email' => $attendee
            ]);
        }
    }
}
