<?php
include "connect.php";
$conn = new mysqli("localhost", "root", "", "proghub");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $name = mysqli_real_escape_string($con, $name);
    $surname = mysqli_real_escape_string($con, $surname);
    $email = mysqli_real_escape_string($con, $email);
    $phone = mysqli_real_escape_string($con, $phone);

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $con->prepare("INSERT INTO users (name, surname, email, phone, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $surname, $email, $phone, $hashedPassword);

    if ($stmt->execute()) {

        header("Location: success.php");
    } else {

        echo "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="Image/png" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-item:hover .nav-link{
            background-color: gray; 
            color: #fff; 
        }
    </style>
</head>
<body style="font-family: 'Century Gothic', sans-serif;" class="color-change">
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="page-home.php"><img src="images/logo.png" width="25" height="25" class="me-2">Programming Hub</a>
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
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="page-sign.php" style="border-radius: 10px;">Sign-In</a>
                  </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4 shadow pt-2 ps-4 pb-2 rounded-4 py-4 bg-white scale-in-center">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1>Anyone can become a programmer!</h1>
                <p>Our programming school will help you master programming skills quickly and efficiently</p>
            </div>
            <div class="col-lg-5 col-md-12">
                <img src="images/home/pic2.jpg" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container my-4 shadow rounded-4 ps-4 py-4 bg-light bg-white scale-in-center">
        <h3 class="text-center">Why choose us?</h3>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <img src="images/home/b1.png" class="img-fluid">
                <p class="fw-bold">Improve your skills</p>
                <p>Complete the free diagnostics and select the appropriate level to start training</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <img src="images/home/b2.png" class="img-fluid">
                <p class="fw-bold">Best Price Guarantee</p>
                <p>If you do not like the course within 2 weeks, we will refund the money</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <img src="images/home/b3.png" class="img-fluid">
                <p class="fw-bold">Nothing but code</p>
                <p>Our courses have absorbed many years of experience of full-time courses and advanced techniques from the world of online learning</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <img src="images/home/b4.png" class="img-fluid">
                <p class="fw-bold">Practice in IT companies</p>
                <p>Employment and internships after obtaining a certificate. And the best students are waiting for a job in a startup or in IT companies</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <img src="images/home/b5.png" class="img-fluid">
                <p class="fw-bold">Quick start</p>
                <p>They come to us for a new career. We have gathered the best teachers in the courses of our school</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <img src="images/home/b6.png" class="img-fluid">
                <p class="fw-bold">The first cache</p>
                <p>Get your first order from a real customer</p>
            </div>
        </div>
    </div>

    <div class="container my-4 shadow rounded-4 ps-4 bg-white py-4 scale-in-center">
        <div class="row">
            <div class="col-md-6">
                <h4>Couldn't decide?</h4>
                <p>Fill out the form and get a consultation</p>
                <img src="images/home/formpic.jpg" class="w-50">
            </div>
            <div class="col-md-6">
                <form id="myForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <input type="text" class="form-control" id="message">
                    </div>
                    <button type="submit" class="color-change rounded-pill btn btn-secondary">Send</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container my-4 shadow rounded-4 ps-4 bg-white py-4 scale-in-center">
        <div class="row">
            <div class="col-md-6">
                <h4>Don't you have an account?</h4>
                <p>click to registration</p>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@fat">Sign up</button>
            </div>
            <div class="col-md-6">
            <h4>if you already have an account</h4>
                <p>click to login</p>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@fat">Log in</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="container">
            <form id="signup-form" action="#" method="post">
              <div class="mb-3 input-group">
                <span class="input-group-text bg-white">
                  <svg xmlns="http://www.w3.org/1600/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                  </svg>
                </span>
                <input type="text" class="form-control" id="name" name="name" pattern="[A-Za-z]{1,16}" placeholder="Name" required>
              </div>

              <div class="mb-3 input-group">
                <span class="input-group-text bg-white">
                  <svg xmlns="http://www.w3.org/1600/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                  </svg>
                </span>
                <input type="text" class="form-control" id="surname" name="surname" pattern="[A-Za-z]{1,16}" placeholder="Surname" required>
              </div>

              <div class="mb-3 input-group">
                <span class="input-group-text bg-white">
                  <svg xmlns="http://www.w3.org/1600/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.816L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg>
                </span>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>

              <div class="mb-3 input-group">
                <span class="input-group-text bg-white">
                  <svg xmlns="http://www.w3.org/1600/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.450 1.770a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.770-.450l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.580-.122l-2.190.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.460-1.657l.548-2.190a.678.678 0 0 0-.122-.580L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.290 2.980c.329.423.445.974.315 1.494l-.547 2.190a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.870.163 2.611l-1.034 1.034c-.740.740-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.010-4.416 18.634 18.634 0 0 1-4.416-7.009c-.362-1.030-.037-2.137.703-2.877L1.885.511z"/>
                  </svg>
                </span>
                <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Phone" required>
              </div>

              <div class="mb-3 input-group">
                <span class="input-group-text bg-white">
                  <svg xmlns="http://www.w3.org/1600/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                  </svg>
                </span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              </div>

              <div class="mb-3 input-group">
                <span class="input-group-text bg-white">
                  <svg xmlns="http://www.w3.org/1600/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                  </svg>
                </span>
                <input type="password" class="form-control" id="password2" name="password" placeholder="Confirm Password" required>
              </div>
            </form>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="signup-button">Sign up</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="container">
            <form id="signup-form" action="#" method="post">
              <div class="mb-3 input-group">
                <span class="input-group-text bg-white">
                  <svg xmlns="http://www.w3.org/1600/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.816L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg>
                </span>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="mb-3 input-group">
                <span class="input-group-text bg-white">
                  <svg xmlns="http://www.w3.org/1600/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                  </svg>
                </span>
                <input type="password" class="form-control" id="password1" name="password" placeholder="Password" required>
              </div>
            </form>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="login-button">Log in</button>
      </div>
    </div>
  </div>
</div>

    <footer class="bg-light fw-bold text-center py-2 shadow-lg">
        <p>&copy; 2023 Programming Hub</p>
    </footer>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/6.0.6/imask.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var phoneInput = document.getElementById("phone");
            var phoneMask = IMask(phoneInput, {
                mask: '+{7}(000)000-00-00',
                lazy: false,
                placeholderChar: '0'
            });

            document.getElementById("signup-button").addEventListener("click", function () {
            const password1 = document.getElementById('password').value;
            const password2 = document.getElementById('password2').value;

            if (password1 !== password2) {
                alert('Passwords do not match. Please try again.');
                return;
            }
            });

              document.getElementById("signup-button").addEventListener("click", function () {
              const name = document.getElementById('name').value;
              const email = document.getElementById('email').value;
              alert('You are welcome, ' + name +'!');
              document.getElementById('name').value = '';
              document.getElementById('email').value = '';
              message.value = '';
              document.getElementById('alertMessage').style.display = 'none';
            });

            
            document.getElementById("login-button").addEventListener("click", function () {
              const name = document.getElementById('name').value;
              const email = document.getElementById('email').value;
              alert('You are welcome, ' + name +'!');
              document.getElementById('name').value = '';
              document.getElementById('email').value = '';
              message.value = '';
              document.getElementById('alertMessage').style.display = 'none';
            });
        });
    </script>
</body>
</html>