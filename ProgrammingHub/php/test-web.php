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
            <!-- Question 1 -->
            <div class="question mt-4">
                <p class="fw-bold">1. What is HTML?</p>
                <input type="radio" name="q1" value="A"> A. Hyper Text Markup Language<br>
                <input type="radio" name="q1" value="B"> B. High Tech Multi-Language<br>
                <input type="radio" name="q1" value="C"> C. Hyper Transfer Markup Language
            </div>

            <!-- Question 2 -->
            <div class="question mt-4">
                <p class="fw-bold">2. What is CSS?</p>
                <input type="radio" name="q2" value="A"> A. Colorful Style Sheet<br>
                <input type="radio" name="q2" value="B"> B. Computer Style Sheet<br>
                <input type="radio" name="q2" value="C"> C. Cascading Style Sheet
            </div>
            
            <!-- Question 3 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 3: What is the primary purpose of JavaScript in web development?</p>
                <input type="radio" name="q3" value="A"> A. To add interactivity and functionality to web pages<br>
                <input type="radio" name="q3" value="B"> B. To style web content<br>
                <input type="radio" name="q3" value="C"> C. To define the structure of a webpage
            </div>

            <!-- Question 4 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 4: What does the acronym "URL" stand for?</p>
                <input type="radio" name="q4" value="A"> A. Uniform Resource Link<br>
                <input type="radio" name="q4" value="B"> B. Universal Resource Locator<br>
                <input type=radio name="q4" value="C"> C. Universal Reference Link
            </div>

            <!-- Question 5 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 5: Which programming language is commonly used for server-side web development?</p>
                <input type="radio" name="q5" value="A"> A. JavaScript<br>
                <input type="radio" name="q5" value="B"> B. Python<br>
                <input type="radio" name="q5" value="C"> C. PHP
            </div>

            <!-- Question 6 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 6: What does "HTTP" stand for in the context of web communication?</p>
                <input type="radio" name="q6" value="A"> A. Hyper Transfer Text Protocol<br>
                <input type="radio" name="q6" value="B"> B. Hyperlink and Text Transfer Protocol<br>
                <input type="radio" name="q6" value="C"> C. Hypertext Transfer Protocol
            </div>

            <!-- Question 7 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 7: What is the purpose of a web browser in web development?</p>
                <input type="radio" name="q7" value="A"> A. To manage databases<br>
                <input type="radio" name="q7" value="B"> B. To request and display web pages<br>
                <input type="radio" name="q7" value="C"> C. To create web content
            </div>

            <!-- Question 8 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 8: What is the main advantage of using a CSS framework in web development?</p>
                <input type="radio" name="q8" value="A"> A. It provides pre-designed styles and layouts for faster development <br>
                <input type="radio" name="q8" value="B"> B. It makes websites load faster<br>
                <input type="radio" name="q8" value="C"> C. It enhances website security
            </div>

            <!-- Question 9 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 9: Which web development term refers to the process of making a website compatible with various devices and screen sizes?</p>
                <input type="radio" name="q9" value="A"> A. Responsiveness<br>
                <input type="radio" name="q9" value="B"> B. Redirection<br>
                <input type="radio" name="q9" value="C"> C. Resolution
            </div>

            <!-- Question 10 -->
            <div class="question mt-4">
                <p class="fw-bold">Question 10: What is the purpose of the HTML <meta> tag in web development?</p>
                <input type="radio" name="q10" value="A"> A. It adds interactive elements to the webpage<br>
                <input type="radio" name="q10" value="B"> B. It provides metadata about the webpage, such as character encoding and viewport settings<br>
                <input type="radio" name="q10" value="C"> C. It defines the website's main heading
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
