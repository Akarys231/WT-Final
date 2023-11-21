<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="Image/png" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | Programming Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-item:hover .nav-link{
            background-color: gray; 
            color: #fff; 
        }
        .learn-more-button {
            float: right;
        }

    </style>
</head>
<body style="font-family: 'Century Gothic', sans-serif;" class="color-change">
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="page-home.php"><img src="images/logo.png" width="25" height="25" class="me-2">Programming Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="page-home.php" style="border-radius: 10px;">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="page-courses.php" style="border-radius: 10px;">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-teachers.php" style="border-radius: 10px;">Teachers</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="page-sign.php" style="border-radius: 10px;">Sign-In</a>
                    </li>
                </ul>
            </div>
        </div> 
    </nav>      
    <div class="container my-4">
        <div class="row">
            <div class="col-md container-fluid shadow-sm mt-3 rounded-4 bg-white py-4 px-4 flip-in-hor-bottom1">
                <h4>Web development for beginners</h4>
                <p>Start writing your first web applications using JavaScript, considered the No. 1 language on the world market</p>
                <button class=" color-change rounded-pill btn btn-secondary learn-more-button" data-bs-toggle="collapse" data-bs-target="#web-development-content">Learn More</button>
                <div class="collapse bg-white" id="web-development-content">
                    <h4>In this course you will learn:</h4>
                    <p class="fw-bold">1. Layout methodology</p>
                    <p>Modern layout should be subject to one of the existing standards. At the webinars, we will analyze step by step what modern approaches to layout are. We will place special emphasis on the “BEM-naming” class naming methodology used by Yandex.</p>
                    <p class="fw-bold">2. CSS, Flexbox, Adaptive layout</p>
                    <p>In the modern world, more and more people are browsing the Internet from their mobile devices. That is why you need to take care that your layout looks correct regardless of which device it was opened on.</p>
                    <p class="fw-bold">3. Work confidently with layouts</p>
                    <p>To create design layouts, most designers choose Figma. That is why the layout designer needs to know the basics of working with this program. During the courses, you will learn how to quickly and efficiently cut the layout, and prepare images for layout.</p>
                    <p class="fw-bold">4. Programming in Javascript</p>
                    <p>To make your site dynamic and interactive, you often have to manipulate the elements on it, and javascript copes with this perfectly. During the course, you will learn pure JavaScript, but you will also get acquainted with Jquery.</p>
                    <p class="fw-bold">5. Animations - making websites live</p>
                    <p>New CSS modules make it possible to work with animation, as well as add decorative elements to the page. All this makes the interface more pleasant, smooth and user-friendly. At the end of the course, you will clearly know what can and should be done using CSS, without resorting to JavaScript unnecessarily.</p>
                    <p class="fw-bold">6. Familiarity with server languages</p>
                    <p>More and more often in the labor market we meet vacancies of “full stack” developers. Of course, this is one of the trends of this year. Today, the layout designer should know at least the basics of one of the server programming languages. In this course, we will learn how to work with Node.JS framework Express: developing complex forms, sending and receiving data, working with JSON and Ajax. We will also analyze the most common errors when working with forms and study the best modern practices.The module will be filled with practice, you will develop 2 full-fledged websites. The first is an analogue of the Kinopoisk website, the second is a blog for posting news in the IT field.</p>
                    <p class="fw-bold">7. Working with MongoDB database</p>
                    <p>The skill of working with databases is one of the key skills for any programmer. In this course, you will get acquainted with the NoSQL database and learn how to make queries using the basic functions for adding/deleting/editing/reading information from the database. You will develop your first database for a blog and a Kinopoisk analog site.</p>
                    <p class="fw-bold">8. Deployment</p>
                    <p>Just a little bit left... Creating websites is one thing, but uploading them to a real server is quite another. We will tell and show you how to buy a domain, upload a website to hosting and how to link them together. You will also learn how to set up various analytics and metrics on the site.</p>
                    <a href="test-web.php" class="rounded-pill color-change btn btn-secondary py-2">Try it yourself</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md container-fluid shadow-sm mt-3 rounded-4 bg-white py-4 px-4 flip-in-hor-bottom2">
                <h4>Basics of programming and algorithmization in C++</h4>
                <p>Take a course in algorithmization and the basics of programming in C++</p>
                <button class=" color-change rounded-pill btn btn-secondary learn-more-button" data-bs-toggle="collapse" data-bs-target="#basics-cpp-content">Learn More</button>
                <div class="collapse bg-white" id="basics-cpp-content">
                    <h4>In this course you will learn:</h4>
                    <p class="fw-bold">1. Basic concepts</p>
                    <p>Data input and output. Data types. Variables. Assignment operator. Changing variables. Working with errors and how to write code correctly.</p>
                    <p class="fw-bold">2. Conditional operator</p>
                    <p>The study of the schemes "if", "if otherwise" and "otherwise". Features of drawing up conditions. Comparison operations. Logical operators. Conditional constructions.</p>
                    <p class="fw-bold">3. Working with cycles</p>
                    <p>Types of cycles in C++. A loop with a condition. A cycle with a postcondition. An infinite loop. Break and continue operators. Syntactic and semantic features of the use of these constructions. The relationship between cycles with a counter and a condition.</p>
                    <p class="fw-bold">4. Arrays and strings</p>
                    <p>Introduction to arrays and strings. The concept of indexes and working with indexes. Analysis of methods. Multidimensional arrays.</p>
                    <p class="fw-bold">5. Containers</p>
                    <p>Studying containers like vector, set, map, stack, queue, deque. As well as their methods. The difference between them. Iteration of each collection. Study of the term “key-value".</p>
                    <p class="fw-bold">6. Functions</p>
                    <p>The concept of "function". The capabilities of the studied tools. Advantages and disadvantages of functions. Features of use and syntax of functions. Local and global variables. Transmitting and returning data from functions. Recursive functions.</p>
                    <p class="fw-bold">7. Classes and structures</p>
                    <p>The concept of "class" and "struct". Creating a class and an object. Creating class properties and methods. Constructor of the class. The difference between class and struct. Creating your own structures.</p>
                    <p class="fw-bold">8. Console application development</p>
                    <p>Development of console mini-applications to choose from.</p>
                    <a href="test-c++.php" class="color-change rounded-pill btn btn-secondary">Try it yourself</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md container-fluid shadow-sm mt-3 rounded-4 bg-white py-4 px-4 flip-in-hor-bottom3">
                <h4>Python developer</h4>
                <p>Learn the basics of the fastest growing and most popular programming language in the world, used by programmers, analysts, and machine learning engineers alike</p>
                <button class=" color-change rounded-pill btn btn-secondary learn-more-button" data-bs-toggle="collapse" data-bs-target="#python-developer-content">Learn More</button>
                <div class="collapse bg-white" id="python-developer-content">
                    <h4>In this course you will learn:</h4>
                    <p class="fw-bold">1. Layout methodology</p>
                    <p>Modern layout should be subject to one of the existing standards. At the webinars, we will analyze step by step what modern approaches to layout are. We will place special emphasis on the “BEM-naming” class naming methodology used by Yandex.</p>
                    <p class="fw-bold">2. CSS, Flexbox, Adaptive layout</p>
                    <p>In the modern world, more and more people are browsing the Internet from their mobile devices. That is why you need to take care that your layout looks correct regardless of which device it was opened on.</p>
                    <p class="fw-bold">3. Work confidently with layouts</p>
                    <p>To create design layouts, most designers choose Figma. That is why the layout designer needs to know the basics of working with this program. During the courses, you will learn how to quickly and efficiently cut the layout, and prepare images for layout.</p>
                    <p class="fw-bold">4. Programming in Python</p>
                    <p>You will study topics such as variables, conditional operators, loops, arrays, functions, the basics of OOP. Solving problems on algorithms and data structures.</p>
                    <p class="fw-bold">5. Working with PostgreSQL databases</p>
                    <p>The skill of working with databases is one of the key skills for any programmer. In this course, you will get acquainted with the SQL language and learn how to make queries using the basic SELECT, INSERT, UPDATE, DELETE operators — and you will be able to query, load, update and delete data. You will develop your first online store database and prepare for the start of a successful career as a programmer.</p>
                    <p class="fw-bold">6. Architecture for building client-server applications</p>
                    <p>REST is becoming a common approach for presenting services to the outside world. The reason for its popularity lies in its simplicity, ease of use, access via HTTP and others.</p>
                    <p class="fw-bold">7. Authorization and authentication</p>
                    <p>We configure our server taking into account security requirements. Passing authentication and granting and verifying the rights to perform any actions in the system.</p>
                    <p class="fw-bold">8. Django-Rest-Framework</p>
                    <p>REST is becoming a common approach for presenting services to the outside world. The reason for its popularity lies in its simplicity, ease of use, access via HTTP and others.</p>
                    <p class="fw-bold">9. Deployment</p>
                    <p>Just a little bit left... Creating websites is one thing, but uploading them to a real server is quite another. We will tell and show you how to buy a domain, upload a website to hosting and how to link them together. You will also learn how to set up various analytics and metrics on the site.</p>
                    <a href="test-python.php" class=" color-change rounded-pill btn btn-secondary">Try it yourself</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md container-fluid shadow-sm mt-3 rounded-4 bg-white py-4 px-4 flip-in-hor-bottom4">
                <h4>Unity Game Developer</h4>
                <p>Learn programming by creating games on Unity</p>
                <button class=" color-change rounded-pill btn btn-secondary learn-more-button" data-bs-toggle="collapse" data-bs-target="#android-dev-content">Learn More</button>
                <div class="collapse bg-white" id="android-dev-content">
                    <h4>In This Course You Will Learn:</h4>
                    <p class="fw-bold">1. Unity3d Basics</p>
                    <p>Installing and getting to know Unity3D. Analysis of the interface, existing packages and add-ons. Basics of lighting, materials, audio, cameras.</p>
                    <p class="fw-bold">2. The Main Components Of The Game</p>
                    <p>Creating a landscape and environment. Using standard assets. Visual and sound effects. Creating prefabs and text. Creating a health scale and dealing damage to objects.</p>
                    <p class="fw-bold">3. C# On Unity3d</p>
                    <p>Basics of programming and basic concepts. Condition operators, for and while loops, arrays, and a foreach loop. Setting up moving targets, firing projectiles.</p>
                    <p class="fw-bold">4. Unity3d Animation</p>
                    <p>Types of animation, rules of operation. Creating animations for environment objects. Creating and configuring prefabs with various properties (bonuses). Learning triggers, character animations.</p>
                    <a href="test-game.php" class="color-change rounded-pill btn btn-secondary">Try it yourself</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md container-fluid shadow-sm mt-3 rounded-4 bg-white py-4 px-4 flip-in-hor-bottom5">
                <h4>Databases for beginners | SQL</h4>
                <p>Learn how to create SQL Databases with mentors developers!</p>
                <button class=" color-change rounded-pill btn btn-secondary learn-more-button" data-bs-toggle="collapse" data-bs-target="#sql-content">Learn More</button>
                <div class="collapse bg-white" id="sql-content">
                    <h4>In this course you will learn:</h4>
                    <p class="fw-bold">1. Introduction to databases</p>
                    <p>Overview of SQL databases, basic principles of data warehouses, types of data warehouses, DBMS, domain systems. You will learn what the SQL language is, what SQL and NoSQL databases are and how they differ. You will understand simple data types, learn how to make SELECT queries with a WHERE filter.</p>
                    <p class="fw-bold">2. Database creation, deletion and various parameters during creation</p>
                    <p>SQL database foundation, database creation and configuration</p>
                    <p class="fw-bold">3. Basics of working with SQL database tables</p>
                    <p>Deleting and creating tables, normalization</p>
                    <p class="fw-bold">4. DDL - Data definition language</p>
                    <p>Fundamentals of the data definition language, overview of the basic principles of DDL. Learn how to insert records into tables, update and delete them. You will understand the methods of resolving duplicates of the primary key</p>
                    <p class="fw-bold">5. DML - data processing language</p>
                    <p>Fundamentals of data manipulation language, overview of basic SQL operators, principles of data manipulation</p>
                    <p class="fw-bold">6. Conditional selection using Where</p>
                    <p>Data table selection, data filtering, output data ordering</p>
                    <p class="fw-bold">7. Types of connections</p>
                    <p>Data tables linking an overview of the basic principles, combining multiple tables in a query</p>
                    <p class="fw-bold">8. Stored procedures</p>
                    <p>Introduction to stored procedures and triggers, development of stored procedures</p>
                    <p class="fw-bold">9. Configuring the SQL Server Management Studio Environment</p>
                    <p>MS SQL Server DBMS overview, basic database configuration, roles, security</p>
                    <p class="fw-bold">10. Types</p>
                    <p>Creating views. Different types and parameters of views. Learn how to use subqueries and understand their performance. You will understand the types of representations and learn how to create them</p>
                    <p class="fw-bold">11. Indexes</p>
                    <p>Creating indexes. Various types and parameters of indexes. You will understand what indexes and keys are, why they are needed, and how they affect performance. Find out what types of keys there are, when to use them, how indexes work and what their limitations are</p>
                    <p class="fw-bold">12. Functions and operators</p>
                    <p>Functions and operators in PostgreSQL</p>
                    <p class="fw-bold">13. Transactions</p>
                    <p>Creating transactions. Isolation levels. Learn what transactions are and why they are needed. You will understand atomicity, rollback and isolation of transactions, and record locking. Will you understand the principles of ACID</p>
                    <p class="fw-bold">14. Stored procedures</p>
                    <p>Introduction to stored procedures and triggers, development of stored procedures</p>
                    <p class="fw-bold">15. Database normalization</p>
                    <p>Functional dependencies and normal forms of tables</p>
                    <a href="test-sql.php" class="color-change rounded-pill btn btn-secondary">Try it yourself</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-2 shadow-lg">
        <p>&copy; 2023 Programming Hub</p>
    </footer>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="js/script.js"></script>
     <script src="js/cart.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
