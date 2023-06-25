<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/style.css') }}">
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>SpaceX</title>

</head>

<body>

    <!-- Header -->
    <section id="header">

        <div id="nav">
            <div class="logo">
                <img src="images/logo1.png" alt="" />
            </div>

            <div class="nav-text">
            <ul>
          <li><a href="#">Home</a></li>
          <li><a href="{{route('search.post')}}">OMDB</a></li>
          <li><a href="{{route('database')}}">Database</a></li>

        </ul>
            </div>

            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <video src="{{ asset('/videos/tanker.mp4') }}" autoplay loop muted></video>
        <div class="container">
            <div class="header-text">
                <br>
                <br>
                <h1>About Us</h1>
                <span class="square"></span>
                <p>
                    You want to wake up in the morning and think the future is going to be great - and that's what
                    being a spacefaring civilization is all about. It's about believing in the future and thinking that
                    the future will be better than the past. And I can't think of anything more exciting than going out
                    there and being among the stars.
                </p>
                <span class="square"></span>
                <h2>"People should pursue what they're passionate about. That will make them happier than pretty much
                    anything else."</h2>
                <h3>--Elon Musk (CEO of SpaceX) </h3>

                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>
            </div>
        </div>

    </section>

    <div id="teams">
        <div class="box">
            <div class="imgbox">
                <img src="images/img/elon3.jpg" alt="" />
            </div>
            <div class="content">
                <h2>
                    Elon Musk <br />
                    <span>Founder & CEO of Tesla, Inc.</span>
                </h2>
            </div>
        </div>
        <div class="box">
            <div class="imgbox">
                <img src="images/img/elon1.jpg" alt="" />
            </div>
            <div class="content">
                <h2>
                    Elon Musk <br/>
                    <span>CEO & CTO of SpaceX</span>
                </h2>
            </div>
            <div class="contentbox">
                <div class="content-isi">
                    <h2>CEO & CTO</h2>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgbox">
                <img src="images/img/elon2.jpg" alt="" />
            </div>
            <div class="content">
                <h2>
                    Elon Musk <br />
                    <span>Founder of OpenAI</span>
                </h2>
            </div>
        </div>
    </div>
    <!-- end Header -->

    <!-- Sidenav -->
    <nav id="sidenav">
    <ul>
          <li><a href="#">Home</a></li>
          <li><a href="{{route('search.post')}}">OMDB</a></li>
          <li><a href="{{route('database')}}">Database</a></li>

        </ul>
    </nav>

    <img src="images/menu1.png" alt="" id="menuBTN">
    <!-- end Sidenav -->

    <div class="footer">
        <div class="footer-logo">
            <i class="fab fa-galactic-republic"></i>
        </div>
        <div class="footer-title">
            SpaceX
        </div>
        <div class="footer-description">
            Exploring the Future of Space Travel
        </div>
        <div class="footer-links">
            <a href="https://www.spacex.com/" target="_blank"><i class="fas fa-globe"></i></a>
            <a href="https://twitter.com/SpaceX" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/spacex/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/spacex" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <button id="scrollBtn" onclick="scrollToTop()" title="Scroll to Top"></button>
    <script>
        // Get the button element
        const scrollBtn = document.getElementById("scrollBtn");

        // Show the button when the user scrolls down 20% of the viewport height
        window.addEventListener("scroll", function () {
            if (window.scrollY > window.innerHeight * 0.2) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        });

        // Scroll smoothly to the top of the document when the button is clicked
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script>
        const menuBtn = document.getElementById("menuBTN");
        const sideNav = document.getElementById("sidenav");
        sidenav.style.right = "-250px";
        menuBtn.onclick = function () {
            if (sidenav.style.right == "-250px") {
                sidenav.style.right = "-0";
                menuBtn.style.transform = 'rotate(180deg)';
            } else {
                sidenav.style.right = "-250px";
                menuBtn.style.transform = 'rotate(0)';
            }
        }


        var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>
    <script src="script/script.js"></script>
</body>

</html>