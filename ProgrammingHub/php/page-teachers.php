<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="Image/png" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers | Programming Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-item:hover .nav-link {
            background-color: gray; 
            color: #fff; 
        }

        .carousel-item img {
            margin-bottom: 20px;
        }
    </style>
</head>
<body style="font-family: 'Century Gothic';" class="text-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
        <div class="container">
            <a class="navbar-brand" href="page-home.php"><img src="images/logo.png" width="25" height="25" class="me-2">Programming Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="page-home.php" style="border-radius: 10px;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-courses.php" style="border-radius: 10px;">Courses</a>
                    </li>
                    <li class="nav-item active">
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

    <div class="container my-4 shadow-lg bg-dark rounded">
        <h1 class="text-center">Our teachers</h1>

        <div id="teacherCarousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#teacherCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#teacherCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#teacherCarousel" data-bs-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <!-- Преподаватель 1 -->
                <div class="carousel-item active text-center">
                    <img src="images/teachers/teacher1.jpg" alt="Преподаватель 1" class="mx-auto">
                    <p>Junisbek Zangar Mamadiyarovich</p>
                    <p>Full-stack Developer (Senior)</p>
                    <p class="text-secondary">Works for the company "Apple Corporation" in Cupertino, California, USA</p>
                    <p class="text-dark">.</p>
                </div>
                
                <!-- Преподаватель 2 -->
                <div class="carousel-item text-center">
                    <img src="images/teachers/teacher1.jpg" alt="Преподаватель 2" class="mx-auto">
                    <p>Akarys Nuradinov Erzhanuly</p>
                    <p>Full-stack Developer (Senior)</p>
                    <p class="text-secondary">Works for the company "Samsung Electronics" in Suwon, South Korea</p>
                    <p class="text-dark">.</p>
                </div>
            

                <!-- Преподаватель 3 -->
                <div class="carousel-item text-center">
                    <img src="images/teachers/teacher1.jpg" alt="Преподаватель 3" class="mx-auto">
                    <p>Turlybek Dana Turezhankyzy</p>
                    <p>Full-stack Developer (Senior)</p> 
                    <p class="text-secondary">Works for the company "Inc. Google" in Mountain View, California, USA</p>
                    <p class="text-dark">.</p>
                </div>
            </div>

            <a class="carousel-control-prev" href="#teacherCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#teacherCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-2 shadow" style="position: fixed; bottom: 0; width: 100%;">
        <p>&copy; 2023 Programming Hub</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
