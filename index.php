<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angelica's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Linking CSS -->
</head>
<body>

<?php include("header.php"); ?>

<div class="content">
    <!-- Homepage Section -->
    <section id="home">
        <div class="homepage">
            <div class="left-side">
                <img src="ange.jpg" alt="Profile Picture" class="profile-pic">
            </div>
            <div class="right-side">
                <h1>Welcome to My Portfolio</h1>
                <p class="intro">
                    <span class="hi">Hi <span class="wave">👋</span></span>
                    <span class="static-text">I'm</span>
                    <span class="name">Angelica</span>
                </p>
                <p class="description">"Where creativity meets precision—shaping seamless digital experiences."</p>
                <a href="#projects" class="btn">View My Projects</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="about-page">
            <div class="left-side">
                <img src="your-image.jpg" alt="Profile Picture" class="profile-pic">
            </div>
            <div class="right-side">
                <h1>About Me</h1>
                <p class="description">"Where creativity meets precision—shaping seamless digital experiences."</p>

                <div class="expertise-section">
                    <h2>What I Do</h2>
                    <p>I specialize in creating intuitive and visually appealing interfaces, ensuring seamless user experience.</p>
                </div>

                <div class="skills-section">
                    <h2>Skills</h2>
                    <ul>
                        <li>Computer Literate</li>
                        <li>UI/UX Design</li>
                        <li>Responsive Web Development</li>
                        <li>Adaptability</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact-page">
            <div class="left-side">
                <h1>Get in Touch</h1>
                <p>Whether you have a project idea, need assistance with UI/UX design, or just want to connect—I’d love to hear from you!</p>

                <div class="contact-info">
                    <p>📧 <strong>Email:</strong> <a href="mailto:your-email@example.com">your-email@example.com</a></p>
                    <p>📞 <strong>Phone:</strong> +63 900 123 4567</p>
                    <p>🔗 <strong>LinkedIn:</strong> <a href="linkedin.com/in/yourprofile">linkedin.com/in/yourprofile</a></p>
                </div>
            </div>

            <div class="right-side">
                <h2>Send a Message</h2>
                <form action="send_message.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</div>

<script src="script.js"></script> <!-- Linking JavaScript -->

</body>
</html>
