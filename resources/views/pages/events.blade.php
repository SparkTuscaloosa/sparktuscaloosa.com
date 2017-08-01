@extends('layouts.master')

@section('content')
    <div id='calendar'></div>
    <div id="eventModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2 id="eventModalTitle">Event Title</h2>
            </div>
            <div class="modal-body">
                <p>Start: <span id="eventModalStart"></span></p>
                <p>End: <span id="eventModalEnd"></span></p>
            </div>
        </div>
    </div>
@endsection
