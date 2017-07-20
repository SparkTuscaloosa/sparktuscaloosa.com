@extends('layout.master')

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
    <div class="home-hero">
        <div class="logo">
            <img src="{{ asset('images/spark.png') }}">
        </div>
        <h1>Spark Tuscaloosa</h1>
        <p>Igniting Techies and Creatives</p>
    </div>
    <div class="home-mission">
        <h3>Our Mission</h3>
        <p>
            Spark Tuscaloosa is a community in the Tuscaloosa and surrounding area for anyone who wants to collaborate and expand their skillset. Whether you're a designer, coder, writer, educator, maker, or student. We invite you to join us to network and share your expertise.
        </p>
    </div>
    <div class="home-newsletter">
        <h3>Build with us</h3>
        <p>
            Signup for our newsletter to learn about upcoming events and how you can participate in growing Tuscaloosa's creative community.
        </p>
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
    <div id="home-social">
        <h3>Social</h3>
        <div class="social-links">
            <a href="https://www.meetup.com/Spark-Tuscaloosa/" target="_blank"><i class="fa fa-meetup" aria-hidden="true"></i></a>
            <a href="https://twitter.com/sparktuscaloosa" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/sparktuscaloosa/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/sparktuscaloosa/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/channel/UCo-yOQniEKZ3LDGifnL7cjw" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="https://github.com/SparkTuscaloosa/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
        </div>
    </div>

@endsection
