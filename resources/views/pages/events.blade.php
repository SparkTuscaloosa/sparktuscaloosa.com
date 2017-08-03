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
                <p id="eventModalDate"></p>
                <iframe id="eventModalLocation" frameborder="0" style="border:0"></iframe>
                <div id="eventModalDescription"></div>
            </div>
        </div>
    </div>
@endsection
