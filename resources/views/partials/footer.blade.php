<footer>
    <div class="top">
        <div class="branding section">
            <div class="logo">
                <img src="{{ asset('images/XL-Logo.png') }}" atl="logo">
            </div>
            <h1>Spark Tuscaloosa</h1>
        </div>
        <div class="site-links section">
            <h3>Site</h3>
            <div class="links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('events') }}">Events</a>
            </div>
        </div>
        <div class="social-links section">
            <h3>Social</h3>
            <div class="links">
                <a href="https://www.meetup.com/Spark-Tuscaloosa/" target="_blank"><i class="fa fa-meetup" aria-hidden="true"></i></a>
                <a href="https://twitter.com/sparktuscaloosa" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/sparktuscaloosa/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/sparktuscaloosa/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCo-yOQniEKZ3LDGifnL7cjw" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="https://github.com/SparkTuscaloosa/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="copy-right">
         Spark Tuscaloosa - &copy; {{ date('Y') }}
    </div>
</footer>
