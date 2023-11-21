<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="Image/png" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Tests | Programming Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-item:hover .nav-link{
            background-color: gray; 
            color: #fff; 
        }
    </style>
</head>
<body style="font-family: 'Century Gothic', sans-serif;">
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/logo.png" width="25" height="25" class="me-2">Programming Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="page-home.php" style="border-radius: 10px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-courses.php" style="border-radius: 10px;">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-teachers.php" style="border-radius: 10px;">Teachers</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-4 shadow p-4 bg-light">
        <p id="timer" class="fw-bold"></p>
        <div id="questions">
            <!-- Вопрос 1 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 1: What is HTML?</p>
                <input type="radio" name="q1" value="A"> A. Hyper Text Markup Language<br>
                <input type="radio" name="q1" value="B"> B. High Tech Multi-Language<br>
                <input type="radio" name="q1" value="C"> C. Hyper Transfer Markup Language
            </div>
    
            <!-- Вопрос 2 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 2: What is CSS?</p>
                <input type="radio" name="q2" value="A"> A. Cascading Style Sheet<br>
                <input type="radio" name="q2" value="B"> B. Computer Style Sheet<br>
                <input type="radio" name="q2" value="C"> C. Colorful Style Sheet
            </div>
                        
            <!-- Question 3 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 3: What is Unity in the context of game development?</p>
                <input type="radio" name="q3" value="A"> A. A game development engine<br>
                <input type="radio" name="q3" value="B"> B. A programming language<br>
                <input type="radio" name="q3" value="C"> C. A type of video game
            </div>

            <!-- Question 4 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 4: What scripting languages can you use in Unity?</p>
                <input type="radio" name="q4" value="A"> A. C# and JavaScript<br>
                <input type="radio" name="q4" value="B"> B. Python and Ruby<br>
                <input type="radio" name="q4" value="C"> C. HTML and CSS
            </div>

            <!-- Question 5 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 5: What is the purpose of the Unity Asset Store?</p>
                <input type="radio" name="q5" value="A"> A. To buy and sell Unity games<br>
                <input type="radio" name="q5" value="B"> B. To find and download game assets and resources<br>
                <input type="radio" name="q5" value="C"> C. To host game developer conferences
            </div>

            <!-- Question 6 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 6: What is the primary role of a Unity game developer?</p>
                <input type="radio" name="q6" value="A"> A. Designing game characters<br>
                <input type="radio" name="q6" value="B"> B. Programming and developing games<br>
                <input type="radio" name="q6" value="C"> C. Marketing and promoting games
            </div>

            <!-- Question 7 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 7: What is a Unity scene?</p>
                <input type="radio" name="q7" value="A"> A. A 3D model in Unity<br>
                <input type="radio" name="q7" value="B"> B. A collection of game objects and environments<br>
                <input type="radio" name="q7" value="C"> C. A script for controlling game physics
            </div>

            <!-- Question 8 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 8: What does "Rigidbody" refer to in Unity game development?</p>
                <input type="radio" name="q8" value="A"> A. A gaming console<br>
                <input type="radio" name="q8" value="B"> B. A component for adding physics to game objects<br>
                <input type="radio" name="q8" value="C"> C. A type of game camera
            </div>

            <!-- Question 9 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 9: Which platform(s) can you develop games for using Unity?</p>
                <input type="radio" name="q9" value="A"> A. Windows only<br>
                <input type="radio" name="q9" value="B"> B. Windows and MacOS only<br>
                <input type="radio" name="q9" value="C"> C. Windows, MacOS, iOS, Android, and more
            </div>

            <!-- Question 10 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 10: What is the Unity Asset Serialization mode used for?</p>
                <input type="radio" name="q10" value="A"> A. Controlling the color of game objects<br>
                <input type="radio" name="q10" value="B"> B. Managing how assets are stored and loaded in Unity<br>
                <input type="radio" name="q10" value="C"> C. Adding particle effects to games
            </div>
    
            <button onclick="calculateScore()" class="rounded-pill btn-secondary btn my-2">Submit</button>
    </div>

    <footer class="bg-dark text-white text-center py-2 shadow-lg">
        <p>&copy; 2023 Programming Hub</p>
    </footer>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
