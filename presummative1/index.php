<?php
// User details for the portfolio page
$name = "Julius Jojo C. Sabulao Jr";
$email = "sabulaojrjuliusjojo@gmail.com";
$phone = "09164816120";
$school = "FEU Alabang";
$course = "BS Computer Science, Software Engineering";
$bio = "Computer Science student passionate about software development and eager to gain industry experience.";
$proglanguages = ["Java", "Python", "C++", "Kotlin", "HTML/CSS"];
$acadbackground = [
    "APEC Schools - Sta. Rita (2021–2023) – STEM",
    "Far Eastern University - Alabang (Current) - BSCSSE"
];
$projects = [
    "Personal Portfolio Website – Built with PHP, HTML, and CSS",
    "Messaging Application on Android (Yapyap) – Built using Android Studio"
];
$certification = "Information Technology Specialist in Java – Issued Oct 9, 2024";
$profile = "profile.jpg";
$linkedin = "https://www.linkedin.com/in/julius-jojo-sabulao-jr/";
$github = "https://github.com/clstljr";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name; ?> - Portfolio</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
        <!-- Header section with profile picture and personal details -->
        <div class="header">
            <img src="<?php echo $profile; ?>" alt="Profile Picture" class="profile-pic"> 
            <div class="info">
                <h1><?php echo $name; ?></h1> 
                <p><strong>School:</strong> <?php echo $school; ?></p> 
                <p><strong>Course:</strong> <?php echo $course; ?></p> 
                <hr>
                <h2>About me</h2> 
                <p><?php echo $bio; ?></p> 
            </div>
        </div>

        <!-- Main content area with 2-column layout -->
        <div class="main-content">
            <!-- Left column containing academic background and programming languages -->
            <div class="left-column">
                <h2>Academic Background</h2>
                <ul>
                    <?php foreach ($acadbackground as $acad): ?>
                        <li><?php echo $acad; ?></li> 
                    <?php endforeach; ?>
                </ul>
                <hr>

                <h2>Programming Languages</h2>
                <ul>
                    <?php foreach ($proglanguages as $lang): ?>
                        <li><?php echo $lang; ?></li> 
                    <?php endforeach; ?>
                </ul>
                <hr>

                <h2>Certification</h2>
                <p><?php echo $certification; ?></p> 
            </div>

            <!-- Right column containing projects and contact information -->
            <div class="right-column">
                <h2>Projects</h2>
                <ul>
                    <?php foreach ($projects as $project): ?>
                        <li><?php echo $project; ?></li> 
                    <?php endforeach; ?>
                </ul>
                <hr>

                <h2>Contact Information</h2>
                <ul>
                    <li><strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li> 
                    <li><strong>Phone:</strong> <?php echo $phone; ?></li> 
                    <li><strong>LinkedIn:</strong> <a href="<?php echo $linkedin; ?>" target="_blank">linkedin.com/in/julius-jojo-sabulao-jr</a></li> 
                    <li><strong>GitHub:</strong> <a href="<?php echo $github; ?>" target="_blank">github.com/clstljr</a></li> 
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
