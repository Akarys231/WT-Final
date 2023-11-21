<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="Image/png" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | Programming Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your custom styles here */
        /* For demonstration purposes, consider some basic styles */
        .navbar-nav .nav-item:hover .nav-link {
            background-color: gray;
            color: #fff;
        }
        /* Target only links in general for hover effects */
        a:hover {
            text-decoration: none; /* Remove underline */
        }
        /* Target links within the form specifically */
        #loginForm a:hover {
            color: black; /* Change color on hover */
        }
        /* Adjust button padding */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .footer {
            margin-top: auto;
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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Log in</h2>
            <form id="loginForm" method="post" action="login.php">
                <div class="mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="row justify-content-end">
                    <div class="text-end mb-3 col-auto"><a href="pages-recover.php" style="text-decoration:none;color:gray">CAN'T GET IN?</a></div>
                    <div class="text-center mb-3 col-auto"><a href="pages-registr.php" style="text-decoration:none;color:gray;">CREATE AN ACCOUNT</a></div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</div>


<footer class="bg-dark text-white text-center py-2 shadow-lg footer">
    <p>&copy; 2023 Programming Hub</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
