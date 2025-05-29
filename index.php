<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "portfolio_db"); // Adjust database details

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$successMessage = ""; // Variable to store success message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Store message in the database
    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $successMessage = "Message sent successfully! 🎉"; // Set success message
    } else {
        $successMessage = "Oops! Something went wrong. 😞"; // Error message
    }

    $stmt->close();
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angelica's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> <!-- Link to CSS -->
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
                    <p class="intro">
                        <span class="hi">Hi <span class="wave">👋</span></span>
                        <span class="static-text">I'm</span>
                        <span class="name">Angelica</span>
                    </p>
                    <p class="description">"Where creativity meets precision—shaping seamless digital experiences."</p>
                </div>
            </div>
        </section>



        <!-- About Section -->
        <section id="about">
            <div class="about-page">
                <div class="expertise-section">
                    <h2>What I Do</h2>
                    <p>I specialize in creating intuitive and visually appealing interfaces, ensuring seamless user
                        experience.</p>
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
        </section>

        <section id="projects">
            <h2 class="project-title">My Project</h2> <!-- Title at the top -->

            <div class="projects-container">
                <button class="prev-btn" onclick="changeImage(-1)">&#10094;</button> <!-- Left Arrow -->

                <div class="project-card">
                    <img src="image1.png" alt="Project Preview" class="project-img">
                    <img src="image2.png" alt="Project Preview" class="project-img">
                    <img src="image3.png" alt="Project Preview" class="project-img">
                </div>

                <button class="next-btn" onclick="changeImage(1)">&#10095;</button> <!-- Right Arrow -->
            </div>
        </section>



        <section id="contact">
    <div class="contact-page">
        <div class="left_side">
            <h1>Get in Touch</h1>
            <p>Whether you have a project idea, need assistance with UI/UX design, or just want to connect—I’d love to hear from you!</p>

            <div class="contact-info">
                <p>📧 <strong>Email:</strong> <a href="mailto:4391angelica@gmail.com">4391angelica@gmail.com</a></p>
                <p>📞 <strong>Phone:</strong> +63 959475121</p>
            </div>
        </div>

        <div class="right_side">
            <!-- Success Message Display Above the Form -->
            <?php if (!empty($successMessage)) : ?>
                <div id="success-message" style="
                    background-color: lightgreen; 
                    color: white; 
                    padding: 10px; 
                    margin-bottom: 15px; 
                    text-align: center; 
                    font-size: 1.5em;">
                    <?php echo $successMessage; ?>
                </div>
            <?php endif; ?>

            <h2>Send a Message</h2>
            <form action="index.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </div>
</section>

    </div>

    <script src="script.js"></script>

</body>

</html>