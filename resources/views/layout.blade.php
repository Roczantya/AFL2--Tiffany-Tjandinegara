<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Stylesheet dan Font Awesome -->    

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
          /* Import Google Font */
@import url('https://fonts.googleapis.com/css2?family=Genos:wght@100..900&display=swap');

/* Base styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Genos', sans-serif;
    text-decoration: none;
    outline: none;
}

:root {
    --bg-color: #000;
    --snd-bf-color: #424242;
    --text-color: #fff;
    --main-color: hsl(271, 92%, 58%);
}

body, html {
    background: var(--bg-color);
    color: var(--text-color);
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
}

section {
    min-height: 100vh;
    padding: 10rem 0;
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 2rem 3%;
    background-color: var(--bg-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
    border-bottom: 0.1rem solid rgba(103, 101, 101, 0.2);
}

.logo {
    font-size: 2.5rem;
    font-weight: 700;
    cursor: default;
}

.navbar {
    display: flex;
    gap: 4rem;
}

.navbar a {
    font-size: 1.5rem;
    color: var(--text-color);
    font-weight: 600;
    transition: color 0.3s;
}

.navbar a:hover {
    color: var(--main-color);
}

#menu-icon {
    font-size: 3.5rem;
    color: var(--text-color);
    display: none;
    cursor: pointer;
}

.home {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 4rem;
    padding-top: 7rem;
}

.home-content h3, .home-content h1, .about-content h2, .about-content h3, .heading {
    line-height: 1.2;
    margin-bottom: 2rem;
}

span {
    background: linear-gradient(to right, var(--main-color), #d606fb);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    font-size: 3.2rem;
}

.home-img img {
    width: 100%;
    max-width: 25vw;
    border-radius: 30%;
    animation: floatImage 5s ease-in-out infinite;
}

@keyframes floatImage {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-1.1rem); }
}

.btn {
    padding: 1rem 2.8rem;
    background: var(--main-color);
    border-radius: 4rem;
    font-size: 1.3rem;
    color: var(--bg-color);
    transition: box-shadow 0.3s, transform 0.3s;
    display: inline-block;
}

.btn:hover {
    box-shadow: 0 0 1rem var(--main-color);
    transform: scale(1.05);
}

/* Layout Adjustments */
.about, .service-container, .portofolio-container {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
    align-items: center;
}

/* Cards Styling */
.service-box, .portofolio-box {
    background-color: var(--snd-bf-color);
    padding: 2rem;
    border-radius: 1.5rem;
    transition: transform 0.3s;
    box-shadow: 0 0 1rem var(--bg-color);
}

.service-box:hover, .portofolio-box:hover {
    transform: scale(1.02);
    border-color: var(--main-color);
}

.service-box i {
    font-size: 4rem;
    color: var(--main-color);
    margin-bottom: 1rem;
}

/* Media Queries */
@media (max-width: 991px) {
    html { font-size: 53%; }
    .navbar {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        display: none;
        background: var(--bg-color);
        box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.2);
    }
    .navbar.active {
        display: flex;
        flex-direction: column;
        padding: 1rem;
    }
    .home { flex-direction: column; }
    .home-img img { max-width: 70vw; margin-top: 4rem; }
    #menu-icon { display: block; }
}

@media (max-width: 760px) {
    .navbar a {
        font-size: 2rem;
        margin-bottom: 2rem;
    }
    .home-content h3 { font-size: 2.6rem; }
    .home-content h1 { font-size: 3.2rem; }
    .portofolio-container {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 450px) {
    html { font-size: 50%; }
    .home-img img { max-width: 80vw; }
    .portofolio-container {
        grid-template-columns: 1fr;
    }
}


    </style>
</head>
<body>

    <!-- Header -->
    <header class="header">
        <a href="/" class="logo">Fanny</a>
        <i class="fa-solid fa-bars" id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About Me</a>
            <a href="#services">Services</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#contact">Contact Me</a>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by @Tiffany | All Right Reserved</p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class="fa-solid fa-angle-up"></i></a>
        </div>
    </footer>
    
    <!-- Typed JS -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <!-- Scroll Reveal Js -->
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <script>
// Toghle navbar
let nemuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

nemuIcon.onclick =() => {
    nemuIcon.classList.toggle('fa-xmark');
    navbar.classList.toggle('active')

}

// scroll section active

let sections = document.querySelector('section');
let navlinks = document.querySelector('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = offsetHeight;
        let id = sec.getAttribute('id');

        if(top>= offset && top < offset +height){
            navlinks.forEach.apply(links =>{
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id +']').classList.add('active');
            });
        };  
    });

    // Sticky navbar

    let header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY >100);

    // remove toogle icon and navbar 
    nemuIcon.classList.remove('fa-xmark');
    navbar.classList.remove('active');

}

// scrool reveal
ScrollReveal({
    distance: '80px',
    duration: 2000,
    delay:200,
});

ScrollReveal().reveal('.home-content, heading', {origin:'top'});
ScrollReveal().reveal('.home-img, .service-container, .portofolio-box, .contact form', {origin:'bottom'});
ScrollReveal().reveal('.home-content h1, .about-img', {origin:'left'});
ScrollReveal().reveal('.home.content p, .about-content', {origin:'right'});

// Typed js
const typed = new Typed('.text', {
    strings: ['Front End developer','Mobile Developer', 'Game Developer'],
    typeSpeed: 80,
    backspeed: 80,
    backDelay: 1000,
    loop : true,
});


</script>
</body>
</html>
