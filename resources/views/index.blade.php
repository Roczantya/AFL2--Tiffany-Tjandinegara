<!-- resources/views/isian.blade.php -->
@extends('layout')

@section('title', 'Tiffany Tjandinegara | Portfolio')

@section('content')
    <!-- Home Section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hi, Myself</h3>
            <h1>Tiffany Tjandinegara</h1>
            <h3>And I'm a <span class="text"></span> </h3>

            <div class="socialmedia">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://github.com/Roczantya"><i class="fa-brands fa-square-github"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <a href="#" class="btn">Download CV</a>
        </div>

        <div class="home-img">
            <img src="{{ asset('images/image.png') }}" alt="Lo">
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="">
        </div>
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3>Tiffany Tjandinegara</h3>
            <p>Saya seorang mahasiswi di UC Makassar jurusan informatika. Cita cita saya ingin menjadi seorang game developer dan animator(kalo bisa). Saya suka baca Manhwa dan main game. Kalau untuk progress coding, masih awallah ya.</p>
            <a href="#" class="btn">Read more</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <h2 class="heading">My <span>Services</span></h2>
        <div class="service-container">
            <div class="service-box">
                <i class="fa-solid fa-code"></i>
                <h3>Javascript</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis officia perspiciatis nemo iure at magni natus saepe minus, dolore hic dicta itaque, atque nulla fuga quo exercitationem vero molestias eum!</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="service-box">
                <i class="fa-brands fa-android"></i>
                <h3>Python</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis officia perspiciatis nemo iure at magni natus saepe minus, dolore hic dicta itaque, atque nulla fuga quo exercitationem vero molestias eum!</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-gamepad"></i>
                <h3>Java</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis officia perspiciatis nemo iure at magni natus saepe minus, dolore hic dicta itaque, atque nulla fuga quo exercitationem vero molestias eum!</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portofolio" id="portofolio">
        <h2 class="heading">Latest <span>Project</span></h2>
        <div class="portofolio-container">
            <div class="portofolio-box">
                <img src="{{ asset('images/img1.jpg') }}" alt="">
                <div class="portofolio-layer">
                    <h4>Website Portfolio</h4>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

            <div class="portofolio-box">
                <img src="{{ asset('images/img2.jpg') }}" alt="">
                <div class="portofolio-layer">
                    <h4>Library Management System</h4>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>

            <div class="portofolio-box">
                <img src="{{ asset('images/img3.jpg') }}" alt="">
                <div class="portofolio-layer">
                    <h4>Screen Mobile Apps</h4>
                    <i class="fa-solid fa-up-right-from-square"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Me Section -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me</span></h2>
        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Full Name">
                <input type="email" placeholder="Email Address">
            </div>

            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" placeholder="Email Subject">
            </div>

            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>
@endsection
