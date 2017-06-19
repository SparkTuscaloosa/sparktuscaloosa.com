@extends('layout.master')

@section('content')

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