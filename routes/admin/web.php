<?php

use App\Http\Livewire\Admin\ScheduleMeeting;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/schedule-meeting', ScheduleMeeting::class)->name('manage-meeting');
//Route::post('/schedule-meeting', [ScheduleMeeting::class, 'createMeeting']);
