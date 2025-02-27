<!DOCTYPE html>
<html>
<head>
    <title>HMS Vavuniya</title>
    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="hms-vavuniya.css">
  

   
</head>
<body>
    <!-- Header section starts -->
<header class="header">
<a href="#" class="logo">
    <img src="HMS.png" alt="Vavuniya Hostel Management Logo" style="width: 300px; height: auto;">
    
</a>

    <nav class="navbar">
        <a href="#home" class="smooth-scroll">home</a>
        <a href="#about" class="smooth-scroll">about</a>
        <a href="#rooms" class="smooth-scroll">Rooms</a>
        
        <a href="#contact" class="smooth-scroll">contact</a>
        <div class="login-dropdown">
            <button class="login-button">Login</button>
            <div class="login-options">
                <a href="student_login.php">Students</a>
                <a href="admin_login.php">Admin</a>
            </div>
        </div>
    </nav>
    <div id="menu-btn" class="smooth-scroll"> </div>
</header>
<!-- Header section ends -->


    

    <!-- Home section starts -->
    <section class="home" id="home">
        
        <div class="content">
            <h3>UNIVERSITY OF VAVUNIYA</h3>
            <div class="highlighted-paragraph-container">
                <p class="highlighted-text">
                The University of Vavuniya, located in the city of Vavuniya, Sri Lanka, is a public university. Established in June 2021, it was created by converting the Vavuniya Campus of the University of Jaffna into an independent institution. The Government of Sri Lanka announced this transformation to enhance the educational landscape. Abbreviated as UoV, the University of Vavuniya is committed to providing quality education and contributing to academic excellence in the region.                </p>
            </div>
            <a href="student_login.php" class="btn">Book your Hostel room</a>
        </div>
    </section>
    <!-- Home section ends -->

   <!-- Icons section starts -->
<section class="icons-container">
    <div class="icons">
        <div class="icon-frame">
            <img src="iconbg.png" alt="Events Hosted">
        </div>
        <h3>100+</h3>
        <p>events hosted</p>
    </div>
    <div class="icons">
        <div class="icon-frame">
            <img src="iconbg.png" alt="Featured Speakers">
        </div>
        <h3>50+</h3>
        <p>featured speakers</p>
    </div>
    <div class="icons">
        <div class="icon-frame">
            <img src="iconbg.png" alt="Happy Attendees">
        </div>
        <h3>5000+</h3>
        <p>happy attendees</p>
    </div>
    <div class="icons">
        <div class="icon-frame">
            <img src="iconbg.png" alt="Upcoming Events">
        </div>
        <h3>10+</h3>
        <p>upcoming events</p>
    </div>
</section>
<!-- Icons section ends -->


    <!-- About section starts -->
    <section class="about" id="about">
        <br>
        <h1 class="heading"><span>about</span> us</h1>
        <div class="row">
            <div class="image">
                <img src="logo.png" alt="">
            </div>
            <div class="content">
                
                <p>"Welcome to the University of Vavuniya, a thriving academic institution dedicated to excellence in education, research, and community engagement. Established with a vision to empower and inspire, our university stands as a beacon of knowledge in the heart of Vavuniya. Committed to fostering a vibrant learning environment, we take pride in our diverse academic programs, cutting-edge research initiatives, and a faculty passionate about shaping the leaders of tomorrow.
At the University of Vavuniya, we believe in the transformative power of education to elevate lives and drive positive change. Our faculty comprises esteemed educators and researchers who are devoted to nurturing intellectual curiosity and critical thinking skills among our students. With state-of-the-art facilities and a commitment to innovation, we provide a platform for students to explore their interests, expand their horizons, and contribute meaningfully to society.
As an institution deeply rooted in the community, we actively engage in outreach programs and collaborative projects that address local challenges and promote sustainable development. We take pride in our inclusive and supportive campus culture, where students are encouraged to embrace diversity, cultivate leadership skills, and become responsible global citizens.
Explore the endless possibilities that the University of Vavuniya has to offer, where academic excellence meets a holistic approach to personal and professional growth. Join us on a journey of discovery, where each day brings new opportunities to learn, connect, and make a lasting impact on the world."</p>
                <a href="#" class="btn">learn more</a>
            </div>
        </div>
    </section>
    <!-- About section ends -->

    <section id="rooms">
        <h2>Available Rooms</h2>
        <div class="room-container">
            <div class="room-card">
                <img src="room1.jpg" alt="Room 1" class="room-image">
                <div class="room-title">Boys Hostel</div>
                <div class="room-description">Spacious double room perfect for sharing with a friend.</div>
            </div>

            <div class="room-card">
                <img src="room2.jpg" alt="Room 2" class="room-image">
                <div class="room-title">Girls Hostel</div>
                <div class="room-description">Spacious double room perfect for sharing with a friend.</div>
            </div>

        </div>
    </section>

    

    <!-- Contact section starts -->
    <section class="contact" id="contact">
        
    </section>
    <!-- Contact section ends -->

 
<!-- Footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#rooms">rooms</a>
            
            
            <a href="#contact">contact</a>
            <a href="login.html">login</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">Linkedin</a>
        </div>
        <div class="box">
            <h3>contact us</h3>
            <p class="contact-details"><i class="fas fa-phone"></i> Phone: 0764498321</p>
            <p class="contact-details"><i class="fas fa-envelope"></i> Email: info@vavuniya.com</p>
        </div>
        <div class="box">
            <h3>our faculties</h3>
            
            <a href="#service1" class="services">Faculty of Applied Science</a>
            <a href="#service2" class="services">Faculty of Applied Science</a>
            <a href="#service3" class="services">Faculty of Applied Science</a>
            
        </div>
    </div>
</section>
<!-- Footer section ends -->


    <script>
    // Add smooth scrolling to all links with a class of 'smooth-scroll'
    document.querySelectorAll('a.smooth-scroll').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
    
            const targetId = this.getAttribute('href').substring(1); // Get the target section's ID
            const targetSection = document.getElementById(targetId);
    
            // Scroll to the target section smoothly
            window.scrollTo({
                behavior: 'smooth',
                top: targetSection.offsetTop
            });
        });
    });
    </script>

    <!-- ScrollMagic CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>

<!-- GSAP CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

<script>// Initialize ScrollMagic controller
    const controller = new ScrollMagic.Controller();
    
    // Create a GSAP timeline for the home section animation
    const homeAnimation = gsap.timeline();
    homeAnimation.from('.home h3', { opacity: 0, y: 50, duration: 0.5 });
    homeAnimation.from('.home p', { opacity: 0, y: 50, duration: 0.5 });
    homeAnimation.from('.home .btn', { opacity: 0, y: 50, duration: 0.5 });
    
    // Create a ScrollMagic scene for the home section
    const homeScene = new ScrollMagic.Scene({
        triggerElement: '.home',
        triggerHook: 0.5, // Adjust as needed
        reverse: false,
    })
        .setTween(homeAnimation)
        .addTo(controller);
    
    // Create similar animations and scenes for other sections
    // Example for the about section:
    const aboutAnimation = gsap.timeline();
    aboutAnimation.from('.about .image img', { opacity: 0, x: -50, duration: 0.5 });
    aboutAnimation.from('.about .heading , .about p,.about .btn', { opacity: 0, x: -50, duration: 0.5 });
   

    
    
    const aboutScene = new ScrollMagic.Scene({
        triggerElement: '.about',
        triggerHook: 0.3, 
        reverse: false,
    })
        .setTween(aboutAnimation)
        .addTo(controller);

// JavaScript to toggle login options
document.addEventListener("DOMContentLoaded", function() {
    const loginButton = document.querySelector(".login-button");
    const loginOptions = document.querySelector(".login-options");

    loginButton.addEventListener("click", function() {
        loginOptions.style.display = (loginOptions.style.display === "block") ? "none" : "block";
    });

    // Close the login options when clicking outside
    window.addEventListener("click", function(event) {
        if (!event.target.matches('.login-button')) {
            loginOptions.style.display = "none";
        }
    });
});

    </script>

</body>
</html>
