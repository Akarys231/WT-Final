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
            <p class="fw-bold">Question 1: What does SQL stand for?</p>
            <input type="radio" name="sql_q1" value="A"> A. Structured Query Language<br>
            <input type="radio" name="sql_q1" value="B"> B. Simple Query Language<br>
            <input type="radio" name="sql_q1" value="C"> C. Structured Query Logic
        </div>

        <!-- Question 2 -->
        <div class="question mt-4">
            <p class="fw-bold">Question 2: What is the primary purpose of SQL?</p>
            <input type="radio" name="sql_q2" value="A"> A. Graphic design <br>
            <input type="radio" name="sql_q2" value="B"> B. Creating web pages<br>
            <input type="radio" name="sql_q2" value="C"> C. Managing and manipulating databases
        </div>

        <!-- Question 3 -->
        <div class="question mt-4">
            <p class="fw-bold">Question 3: Which SQL statement is used to retrieve data from a database?</p>
            <input type="radio" name="sql_q3" value="A"> A. UPDATE<br>
            <input type="radio" name="sql_q3" value="B"> B. INSERT<br>
            <input type="radio" name="sql_q3" value="C"> C. SELECT
        </div>

        <!-- Question 4 -->
        <div class="question mt-4">
            <p class="fw-bold">Question 4: What is a primary key in a database table?</p>
            <input type="radio" name="sql_q4" value="A"> A. A mandatory field for data entry<br>
            <input type="radio" name="sql_q4" value="B"> B. A unique identifier for each row<br>
            <input type="radio" name="sql_q4" value="C"> C. A data type for text values
        </div>

        <!-- Question 5 -->
        <div class="question mt-4">
            <p class="fw-bold">Question 5: What SQL command is used to add new data to a database?</p>
            <input type="radio" name="sql_q5" value="A"> A. INSERT INTO<br>
            <input type="radio" name="sql_q5" value="B"> B. CREATE TABLE<br>
            <input type="radio" name="sql_q5" value="C"> C. DELETE FROM
        </div>

        <!-- Question 6 -->
        <div class="question mt-4">
            <p class="fw-bold">Question 6: What does the SQL statement "UPDATE" do?</p>
            <input type="radio" name="sql_q6" value="A"> A. Modifies existing records in a table<br>
            <input type="radio" name="sql_q6" value="B"> B. Deletes a table from the database<br>
            <input type="radio" name="sql_q6" value="C"> C. Retrieves data from multiple tables
        </div>

        <!-- Question 7 -->
        <div class="question mt-4">
            <p class="fw-bold">Question 7: Which SQL clause is used to filter results based on a specified condition?</p>
            <input type="radio" name="sql_q7" value="A"> A. ORDER BY<br>
            <input type="radio" name="sql_q7" value="B"> B. GROUP BY<br>
            <input type="radio" name="sql_q7" value="C"> C. WHERE
        </div>

        <!-- Question 8 -->
        <div class="question mt-4">
            <p class="fw-bold">Question 8: What SQL command is used to remove a table from the database?</p>
            <input type="radio" name="sql_q8" value="A"> A. DELETE FROM<br>
            <input type="radio" name="sql_q8" value="B"> B. DROP TABLE<br>
            <input type="radio" name="sql_q8" value="C"> C. REMOVE TABLE
        </div>
        <!-- Question 9 -->
        <div class="question mt-4">
            <p class="fw-bold">Question 9: What does SQL stand for?</p>
            <input type="radio" name="q9" value="A"> A. Structured Query Language<br>
            <input type="radio" name="q9" value="B"> B. Simple Query Language<br>
            <input type="radio" name="q9" value="C"> C. Scripted Query Language
        </div>
        
        <!-- Question 10 -->
        <div class="question mt-4">
            <p class="fw-bold">Question 10: What is the purpose of the SELECT statement in SQL?</p>
            <input type="radio" name="q10" value="A"> A. To delete records from a database<br>
            <input type="radio" name="q10" value="B"> B. To retrieve data from a database<br>
            <input type="radio" name="q10" value="C"> C. To update records in a database
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
