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
            <div class="question mt-4">
                <p class="fw-bold">Question 1: What does C++ stand for?</p>
                <input type="radio" name="q1" value="A"> A. Common Computer Programming Language<br>
                <input type="radio" name="q1" value="B"> B. Compiled C Programming Language<br>
                <input type="radio" name="q1" value="C"> C. C Plus Plus
            </div>
            
            <div class="question mt-4">
                <p class="fw-bold">Question 2: Who developed the C++ programming language?</p>
                <input type="radio" name="q2" value="A"> A. Bjarne Stroustrup<br>
                <input type="radio" name="q2" value="B"> B. Dennis Ritchie<br>
                <input type="radio" name="q2" value="C"> C. Linus Torvalds
            </div>
            
            <div class="question mt-4">
                <p class="fw-bold">Question 3: What is an object in C++?</p>
                <input type="radio" name="q3" value="A"> A. An instance of a class<br>
                <input type="radio" name="q3" value="B"> B. A data type<br>
                <input type="radio" name="q3" value="C"> C. A built-in function
            </div>
            
            <div class="question mt-4">
                <p class="fw-bold">Question 4: What is the extension for C++ source code files?</p>
                <input type="radio" name="q4" value="A"> A. .cpp<br>
                <input type="radio" name="q4" value="B"> B. .cc<br>
                <input type="radio" name="q4" value="C"> C. .cxx
            </div>
            
            <div class="question mt-4">
                <p class="fw-bold">Question 5: What is a constructor in C++?</p>
                <input type="radio" name="q5" value="A"> A. A member function that initializes an object<br>
                <input type="radio" name="q5" value="B"> B. A reserved keyword<br>
                <input type="radio" name="q5" value="C"> C. A file handling function
            </div>
            
            <div class="question mt-4">
                <p class="fw-bold">Question 6: What is the purpose of the "new" operator in C++?</p>
                <input type="radio" name="q6" value="A"> A. Dynamically allocate memory for an object<br>
                <input type="radio" name="q6" value="B"> B. Create a new class<br>
                <input type="radio" name="q6" value="C"> C. Delete an object
            </div>
            
            <div class="question mt-4">
                <p class="fw-bold">Question 7: What is the C++ Standard Library?</p>
                <input type="radio" name="q7" value="A"> A. A collection of pre-defined classes and functions<br>
                <input type="radio" name="q7" value="B"> B. The latest version of the C++ language<br>
                <input type="radio" name="q7" value="C"> C. A set of compiler directives
            </div>
            
            <div class="question mt-4">
                <p class="fw-bold">Question 8: What is operator overloading in C++?</p>
                <input type="radio" name="q8" value="A"> A. Defining new operators in C++<br>
                <input type="radio" name="q8" value="B"> B. Changing the behavior of existing operators for user-defined types<br>
                <input type="radio" name="q8" value="C"> C. Overloading the CPU with too many operations
            </div>

            <div class="question mt-4">
                <p class="fw-bold">9. What is the SQL command to update data in a table?</p>
                <input type="radio" name="q9" value="A"> A. ALTER TABLE<br>
                <input type="radio" name="q9" value="B"> B. UPDATE<br>
                <input type="radio" name="q9" value="C"> C. INSERT INTO
            </div>
            
            <div class="question mt-4">
                <p class="fw-bold">10. What is an SQL foreign key?</p>
                <input type="radio" name="q10" value="A"> A. A key used to unlock a database<br>
                <input type="radio" name="q10" value="B"> B. A key that establishes a link between two tables based on a column<br>
                <input type="radio" name="q10" value="C"> C. A type of SQL query
            </div>
            <button onclick="calculateScore()" class="rounded-pill  btn-secondary btn my-2">Submit</button>
    </div>

    <footer class="bg-dark text-white text-center py-2 shadow-lg">
        <p>&copy; 2023 Programming Hub</p>
    </footer>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
