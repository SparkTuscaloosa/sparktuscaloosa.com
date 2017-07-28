@extends('layouts.master')

@section('content')

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ $error }}
            </div>
        @endforeach
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="home-mission content">
        <h3>Our Mission</h3>
        <p>
            Spark Tuscaloosa is a community in the Tuscaloosa and surrounding area for anyone who wants to collaborate and expand their skillset. Whether you're a designer, coder, writer, educator, maker, or student. We invite you to join us to network and share your expertise.
        </p>
    </div>
    <div class="home-newsletter content">
        <h3>Build with us</h3>
        <p>
            Signup for our newsletter to learn about upcoming events and how you can participate in growing Tuscaloosa's creative community.
        </p>
        <h5>Join our newsletter!</h5>
        <form action={{ route("newsletter") }} method="post">
            {!! csrf_field() !!}
            <div id="newsletterGroup">
                <div id="newsletterEmail">
                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div id="newsletterBtn">
                    <button type="submit">Sign Me Up!</button>
                </div>
            </div>
        </form>
    </div>
@endsection
