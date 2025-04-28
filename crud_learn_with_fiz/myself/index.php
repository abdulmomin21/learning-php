<?php
// Personal info
$name = "Your Name";
$bio = "I'm a passionate learner and web developer.";
$hobby = "Coding, Music, Travelling";
$skills = ["PHP", "JavaScript", "HTML", "CSS"];
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name; ?> - My Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Hi, I'm <?php echo $name; ?> 👋</h1>
    <img src="images/me.jpg" alt="My Picture" class="profile-pic">

    <p><strong>Bio:</strong> <?php echo $bio; ?></p>
    <p><strong>Hobbies:</strong> <?php echo $hobby; ?></p>

    <p><strong>Skills:</strong></p>
    <ul>
        <?php foreach($skills as $skill) {
            echo "<li>$skill</li>";
        } ?>
    </ul>

    <button onclick="showAppreciation()">Say Hi 👋</button>
</div>

<script src="script.js"></script>
</body>
</html>
