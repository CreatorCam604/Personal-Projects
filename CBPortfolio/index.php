<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CameronBrighton</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#work">My Work</a>
        <a href="#contact">Contact</a>
    </nav>
    <section class="homepage" id="home">
        <div class="upperLeft">
            <p>Building dynamic and efficient web page experiences, with a passion for clean code and creative solutions.</p>
        </div>
        
        <div class="lowerLeft">
            <h1>CAMERON</h1>
            <h1>BRIGHTON</h1>
            <br>
            <p class="Developer">Web Developer</p>
        </div>

        <div class="wholeRight">
            <img src="images/PersonalPhoto.png">
        </div>
    </section>

    <section class="aboutPage" id="about">
        <div class="aboutContainer">
            <div class="aboutImage">
                <img src="images/PersonalPhoto.png" alt="Cameron Brighton">
            </div>
            <div class="aboutContent">
                <h2>About Me</h2>
                <p>
                    Hi, I'm <strong>Cameron Brighton</strong>, a passionate aspiring <strong>Full Stack Developer</strong> and 
                    Software Development student at Belgium Campus ITVersity. I love building dynamic web applications and exploring 
                    possibilities in the field of software development.
                </p>
                <h3>Skills & Expertise</h3>
                <ul class="skillsList">
                    <li>✅ Frontend: HTML, CSS, JavaScript</li>
                    <li>✅ Backend: PHP</li>
                    <li>✅ Databases: MySQL</li>
                    <li>✅ Tools: Power BI, Git</li>
                </ul>

                <h3>Education & Experience</h3>
                <p>
                    🎓 Matriculant at King Edward VII School(2022).<br>
                    🎓 3rd Year student in Bachelors in Software Development at Belgium Campus ITVersity.<br>  
                    💼 Working on personal projects to build a strong portfolio.<br>
                    💼 Internship at Cyber1Solutions for internal support systems development.
                </p>
            </div>
        </div>
    </section>

    <section class="workpage" id="work">
        <h1 class="works">RECENT WORKS</h1>
        <br><br>
        <div class="ProjectBox">
            <div class="projectCard">
                <img src="images/CompanyPortal.png" class="card" id="CompanyPortal">
            </div>
            <div class="projectCard">
                <img src="images/E-CommerceWebsite.png" class="card" id="E-CommerceWebsite">
            </div>
            <div class="projectCard">
                <img src="images/SimpleCalculator.png" class="card" id="SimpleCalculator">
            </div>
            <div class="projectCard">
                <img src="images/To-DoListApp.png" class="card" id="To-DoListApp">
            </div>
        </div>   
    </section>

    <section id="contact" class="contactSection">
        <br><br><br>
        <form class="contactForm" method="post" action="https://formspree.io/f/xvgkpdkr">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            
            <button type="submit" onclick="GoBack()">Send Message</button>
        </form>
    </section>
    <script>
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            document.getElementById(targetId).scrollIntoView({
                behavior: 'smooth'
            });
        });
        });

        document.getElementById("CompanyPortal").addEventListener("click", function() {
        window.location.href = "New folder/Access Portal/LandingPage.html";  
        });

        document.getElementById("E-CommerceWebsite").addEventListener("click", function() {
            window.location.href = "New folder/E-Commerce Product Webpage/E-Commerce.html";  
        });

        document.getElementById("SimpleCalculator").addEventListener("click", function() {
            window.location.href = "New folder/Basiccalculator/main.html";  
        });

        document.getElementById("To-DoListApp").addEventListener("click", function() {
            window.location.href = "New folder/To-DoList/index.php";  
        });

        function GoBack() {
            setTimeout(function() {
            window.location.href = "index.php"; // Redirects to index.php
            }, 1000); // Waits 3 seconds before redirecting (adjust if needed)
        }

    </script>
</body>
</html>