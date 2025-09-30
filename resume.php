<?php
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

$name = "Amiel Emmanuel Basibas";
$title = "Computer Science Student";
$title2 = "Freelance Software Developer";

$phone = "+63 998 323 6570";
$email = "amielemman05@gmail.com";
$address = "Laguna, Philippines";
$website = "github.com/mielemman";

$reference_name = "Godwin Miles Ricafort";
$reference_title = "Faculty Mentor";
$reference_phone = "+123-456-7890";
$reference_email = "godwinmilesricafort@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume - <?php echo $name; ?></title>
    <link rel="stylesheet" href="./css/resume.css">
</head>
<body>
    <form method="POST" class="logout-form">
        <button type="submit" name="logout" class="logout-btn">Logout</button>
    </form>
    <div class="resume-container">

        <aside class="sidebar">
            <div class="profile-pic">
                <img src="./images/profile.png" alt="Profile Picture">
            </div>

            <div>
                <h2>Contact</h2>
                <p><?php echo $phone; ?></p>
                <p><?php echo $email; ?></p>
                <p><?php echo $address; ?><p>
                <p><?php echo $website; ?></p>
            </div>

            <div>
                <h2>Technical Skills</h2>
                <ul>
                    <li>Java, Python, C/C++, SQL (Postgres)</li>
                    <li>JavaScript, HTML/CSS</li>
                    <li>Flask, React</li>
                    <li>VS Code, Visual Studio, Git</li>
                    <li>MySQL Workbench, XAMPP, PyCharm</li>
                </ul>
            </div>

            <div>
                <h2>Relevant Course Work</h2>
                <ul>
                    <li>Algorithms Analysis</li>
                    <li>Database Management</li>
                    <li>Object Oriented Programming</li>
                    <li>Computer Programming</li>
                    <li>Computer Networking</li> 
                </ul>
            </div>

            <div>
                <h2>Reference</h2>
                <p><?php echo $reference_name; ?></p>
                <p><?php echo $reference_title; ?></p>
                <p>Phone: <?php echo $reference_phone; ?></p>
                <p>Email: <?php echo $reference_email; ?></p>
            </div>
        </aside>

        <main class="main-content">
            <header class="resume-header">
                <div>
                    <h1><?php echo $name; ?></h1>
                    <h3><?php echo $title; ?></h3>
                    <h3><?php echo $title2; ?></h3>
                </div>
            </header>

            <section class="experience">
                <h2>Work Experience</h2>
                <div class="job">
                    <h3>Freelance Software Developer <span>2019 – Present</span></h3>
                    <p>Self-Employed, Laguna, PH</p>
                    <ul>
                        <li>Developed full-stack and desktop applications using C++, Java, Python, JavaScript, and MySQL.</li>
                        <li>Built projects with user authentication, CRUD operations, and algorithmic optimization.</li>
                        <li>Created solutions such as fitness apps, ticketing systems, and smart device integrations.</li>
                    </ul>
                </div>
                <div class="job">
                    <h3>Software Development Intern <span>2020</span></h3>
                    <p>University of Perpetual Help System Laguna, PH</p>
                    <ul>
                        <li>Completed an 80-hour immersion focusing on programming fundamentals and OOP concepts.</li>
                        <li>Gained hands-on experience in web/software development and database management.</li>
                        <li>Explored REST API development and debugging techniques under mentorship.</li>
                    </ul>
                </div>
            </section>

            <section class="education">
                <h2>Education</h2>
                <div class="edu-item">
                    <h3>Bachelor of Science in Computer Science <span>2020 – 2024</span></h3>
                    <p>Batangas State University, Batangas, PH</p>
                </div>
            </section>

            <section class="projects">
                <h2>Projects</h2>
                <div class="job">
                    <h3>Smart Fire Alarm System <span>2023</span></h3>
                    <p>Arduino, C++, Android Studio, IoT</p>
                    <ul>
                        <li>Built an IoT-based fire detection system for real-time monitoring.</li>
                        <li>Developed a mobile alert system using Firebase Cloud Messaging (FCM).</li>
                        <li>Designed an Android app to display sensor data and alerts.</li>
                    </ul>
                </div>

                <div class="job">
                    <h3>PetFit – Fitness & Virtual Pet App <span>2022</span></h3>
                    <p>Java, MySQL, OOP</p>
                    <ul>
                        <li>Engineered a Java-based fitness tracking app with OOP principles.</li>
                        <li>Implemented MVC architecture for structured, scalable code.</li>
                        <li>Designed user authentication with persistent MySQL storage.</li>
                    </ul>
                </div>

                <div class="job">
                    <h3>IT Ticketing System <span>2021</span></h3>
                    <p>C++, Data Structures & Algorithms</p>
                    <ul>
                        <li>Developed a help-desk ticketing system for IT concerns.</li>
                        <li>Implemented efficient sorting, ID generation, and authentication using DSA.</li>
                        <li>Integrated role-based access control (RBAC) for staff and users.</li>
                    </ul>
                </div>
            </section>

            <section class="certifications">
                <h2>Certifications</h2>
                <div class="edu-item">
                    <h3>CS50: Introduction to Computer Science <span>2023</span></h3>
                    <p>Harvard University</p>
                    <p>Covered algorithms, data structures, memory management, and hands-on projects with C, Python, SQL, and JavaScript.</p>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
