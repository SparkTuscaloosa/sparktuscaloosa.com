<div id="navBar">
    <div class="nav-wrapper">
        <div class="brand">
            <img src="{{ asset('images/small-logo.png') }}" alt="logo" />
            <h1>Spark Tuscaloosa</h1>
        </div>
        <div class="links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('events') }}">Events</a>
            {{-- <a href="{{ route('gallery') }}">Gallery</a> --}}
            <a id="toggleNav" class="icon">&#9776;</a>
        </div>
    </div>
</div>
