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
        @import url('https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,100..900;1,100..900&display=swap');

@tailwind base;
@tailwind components;
@tailwind utilities;

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: 'Genos', sans-serif;
}
:root{
    --bg-color: #000000;
    --snd-bf-color: rgb(66, 66, 66);
    --text-color:#fff;
    --main-color:hsl(271, 92%, 58%), rgb(214, 6, 251);
}

html {
    font-size: 62.5%;
    overflow-x: hidden;
}
body {
    background: var(--bg-color) ;
    color: var(--text-color);
}

section{
    min-height: 100vh;

}
.header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 2rem 0%;
    background-color: var(--bg-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}
.header.sticky{
    border-bottom: .1rem solid rgba(103, 101, 101, 0.2);
}
.logo{
    font-size: 2.5rem;
    color: var(--text-color);
    font-weight: 700;
    cursor: default;
}
.navbar a{
    font-size: 1.5rem;
    color: var(--text-color);
    margin-left: 4rem;
    font-weight: 600;
}

.navbar a:hover, .navbar a:active{
    color: var(--text-color);
    
    
}

#menu-icon{
    font-size: 3.5rem;
    color: var(--text-color);
    display: none;
}
.home {
    display: flex;
    justify-content: center;
    align-items: center;
}
.home-content h3{
    font-size: 3.2rem;
    font-weight: 700;
}

.home-content h3:nth-of-type(2){
    margin-bottom: 2rem;
}

span {
    background: linear-gradient(to right, var(--main-color)); /* Menerapkan gradien pada latar belakang */
    -webkit-background-clip: text; /* Membuat gradien hanya untuk teks di browser berbasis WebKit */
    background-clip: text; /* Properti standar untuk kliping latar belakang pada teks */
    color: transparent; /* Membuat teks transparan sehingga hanya gradien yang terlihat */
    font-size: 3.2rem; /* Menyesuaikan ukuran font */
}
.home-content h1{
    font-size: 4rem;
    font-weight: 300;
    line-height: 1.3;
}

.home-img img {
    width: 25vw;
    border-radius: 30%;
    animation: floatImage 5s ease-in-out infinite;
}

@keyframes floatImage{
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-1.1rem);
    }
    100%{
        transform: translateY(0);
    }
}


.socialmedia a{
    display:inline-flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    background: transparent;
    border-radius: 50%;
    font-size: 2rem;
    color: var(--main-color);
    margin: 3rem 1.5rem 3rem 0 ;
    transition: .5s ease;

}

.socialmedia a:hover{
    background: linear-gradient(var(--main-color));
    color: magenta;
    box-shadow: 0 0 1rem var(--main-color);
    transform: scale(1.1);
}
.btn{
display: inline-block;
padding: 1rem 2.8rem;
background:  linear-gradient(var(--main-color));
border-radius:  4rem;
box-shadow: 0 0 1rem var(--text-color);
font-size: 1.3rem;
color: var(--bg-color);
letter-spacing: .1rem;
font-weight: 600;
transition: .5s ease;
}

.btn:hover{
    box-shadow: none;
    
}

.about{
    display:flex;
    justify-content: center;
    align-items: center;
    gap: 2rem;
    background-color: var(--snd-bf-color);
}

.about-img img{
    width: 35vw;
}

.heading{
    text-align: center;
    font-size: 4.5rem;
}

.about-content h2{
    text-align: left;
    line-height: 1.2;
}

.about-content h3{
    font-size: 2.5 rem;
}

.about-content p{
    font-size: 1.5rem;
    margin: 2rem 0 3rem;
}

.services h2 {
    margin-bottom: 5rem;
}
.service-container{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 2rem;
}

.service-container 
.service-box {
    flex: 1 1 30rem;
    background-color: var(--snd-bf-color);
    padding: 3rem 2rem 4rem;
    border-radius: 2rem;
    text-align: center;
    border: .2rem soid var(--bg-color);
    transition: .5s ease;
}

.service-container
.service-box {
    border-color:  var(--main-color);
    transform: scale(1.02);
}

.service-box i{
    font-size: 7rem;
    color: var(--main-color);
}

.service-box h3{
    font-size: 2.5rem;
}

.service-box p {
    font-size: 1.5rem;
    margin: 1rem 0 3rem;
}

.portofolio {
    background-color: var(--snd-bf-color);
}

.portofolio h2 {
    margin-bottom: 4rem;
}

.portofolio-container{
    display: grid;
    grid-template-columns: repeat(3,1fr) ;
    align-items: center;
    gap: 2.5rem;
}

.portofolio-container
.portofolio-box{
    position: relative;
    border-radius: 2rem;
    box-shadow: 0 0 1rem var(--bg-color);
    overflow: hidden;
    display: flex;
}
.portofolio-box img {
    width: 100%;
    transition: .5s ease;
    opacity: 0.7;
}
.portofolio-box:hover img {
    transform: scale(1.1);
}

.portofolio-box
.portofolio-layer {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:linear-gradient(rgb(116, 19, 235), var(--main-color));
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    padding: 0 4rem;
    transform: translateY(100%);
}

.portofolio-box:hover .portofolio-layer {
    transform: translateY(0);
}

.portofolio-layer h4 {
    font-size: 3rem;
}

.portofolio-layer p{
    font-size: 1.2rem;
    margin: .3rem 0 1rem;
}

.portofolio-layer a{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: rem;
    height: 5rem;
    background: var(--text-color);
    border-radius: 50%;
}

.portofolio-layer a i {
    font-size: 1.5rem;
    color: var(--snd-bf-color);
}

.contact h2{
    margin-bottom: 3rem;
}

.contact form {
    max-width: 70rem;
    margin: 1rem auto;
    text-align: center;
    margin-bottom: 3rem;
}
.contact form 
.input-box {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.contact form
.input-box input,
.contact form textarea {
    width: 100%;
    padding: 1.5rem;
    font-size: 1.6rem ;
    color: var(--text-color);
    background: var(--snd-bf-color);
    border-radius: .8rem;
    margin: .7rem 0;
}
.contact form
.input-box input {
    width: 49%;
}

.contact form textarea {
    resize: none;
}

.contact form .btn {
    margin-top: 2rem;
    cursor: pointer;
}

.footer{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 2rem 9%;
    background: var(--snd-bf-color);
}

.footer-text{
    font-size: 1.6rem;
}

.footer-iconTop{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: .8rem 1rem;
    background: var(--main-color);
    border: .8rem;
    transition: .5s ease;
}

.footer-iconTop a:hover{
    box-shadow: 0 0 1rem var(--main-color) ;
}

.footer-iconTop a i {
    font-size: 2.4rem;
    color: var(--snd-bf-color);
}

/* Breakpoint */
@media (max-width: 1200px) {
    html {
        font-size: 53%;
    }
}

@media (max-width: 991px) {
    .header {
        padding: 2rem 3%;
    }

    section {
        padding: 10rem 3%;
    }
    .services {
        padding:7rem;
    }
    .portofolio {
        padding-bottom: 7;
    }
    .contact{
        min-height: auto;
    }
    .footer {
        padding: 2rem 3%;
    }
}

@media (max-width: 760px) {
    #menu-icon {
        display: block;
    }

    .navbar {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    padding: 1rem 3%;
    background: black;
    border-top: .1rem solid rgba(0,0,0,.2);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.2);
    display: none;

    }
    .navbar.active{
        display: block;
    }
    .navbar a {
        display: block;
        font-size: 2rem;
        margin: 3rem 0;
    }
    .home{
        flex-direction: column;
    }
    .home-content h3 {
        font-size: 2.6rem;
    }

    .home-content {
        order: 2;
    }
    .home-content h1 {
        font-size: 5rem;
    }

    .home-img img {
        width: 70vw;
        margin-top: 4rem;
    }
    .about {
        flex-direction: column;
    }

    .about-img img {
        width: 90vw;
        margin-top: 4rem;
    }

    .services h2 {
        margin-bottom: 3rem;
    }

    .portofolio h2 {
        margin-bottom: 3rem;
    }

    .portofolio-container {
        grid-template-columns: repeat(2,1fr);
    }
}

@media (max-width: 617px) {
    .portofolio-container{
        grid-template-columns: 1 fr;;
    }
.home-img img{
    width: 80vw;
    margin-top: 8rem;
}
    .about-img img {
    width:100vw;
    margin-top: 4 rem;
    }
}
@media (max-width: 450px){
    html {
        font-size: 50%;
    }

    .contact form.input .input-box input {
        width: 100%;
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
