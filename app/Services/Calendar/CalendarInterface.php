<?php


namespace App\Services\Calendar;


use Livewire\Request;

interface CalendarInterface
{
    public function addEvent(array $request);
    public function getEvents(Request $request);
    public function updateEvent(Request $request);
    public function deleteEvent(Request $request);
}
