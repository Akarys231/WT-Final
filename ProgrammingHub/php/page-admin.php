<?php
include "connect.php";

$conn = new mysqli("localhost", "root", "", "proghub");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (name, surname, email, phone, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $surname, $email, $phone, $password);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="Image/png" href="images/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Programming Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-item:hover .nav-link {
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
                        <a class="nav-link" href="page-admin.php" style="border-radius: 10px;">User Management</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4 shadow pt-2 ps-4 pb-2 rounded-4 py-4 bg-white scale-in-center">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1>Welcome to the Admin Panel</h1>
                <p>Manage user data and settings here.</p>
            </div>
        </div>
    </div>

    <div class="container my-4 shadow pt-2 ps-4 pb-2 rounded-4 py-4 bg-white scale-in-center">
        <div class="py-2">
            <h2>Add a user</h2>
        </div>
        <div class="py-1">
            <form action="admin.php" method="post">
                <div class="py-1">
                    <input type="text" name="name" placeholder="Name" class="form-control" required>
                </div>
                <div class="py-1">
                    <input type="text" name="surname" placeholder="Surname" class="form-control" required>
                </div>
                <div class="py-1">
                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                </div>
                <div class="py-1">
                    <input type="tel" name="phone" id="phone" placeholder="Phone" class="form-control" required>
                </div>
                <div class="py-1">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
                <div class="py-1">
                    <button type="submit" class="color-change rounded-pill btn btn-secondary">Add</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container my-4 shadow pt-2 ps-4 pb-2 rounded-4 py-4 bg-white scale-in-center">
        <?php
        $sql = "SELECT id, name, surname, email, phone, password FROM users";
        $result = $conn->query($sql);

        if (!$result) {
            die("Error: " . $conn->error);
        }
        ?>    
        <h2 class="py-2">List of users</h2>
        <div class="col-10">
            <table class="table table-striped fw-1 table-hover table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["surname"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["phone"] . "</td>";
                            echo "<td>" . $row["password"] . "</td>";
                            echo "<td>";

                            echo "<button class='edit-user btn btn-secondary px-1 py-1' data-id='" . $row["id"] . "' data-bs-target='#editUserModal" . $row["id"] . "'>Edit</button>";
                            echo "<button class='delete-user btn btn-secondary px-1 py-1' data-id='" . $row["id"] . "'>Delete</button>";
                            echo "</td>";
                            echo "</tr>";

                            echo "<div class='modal fade' id='editUserModal" . $row["id"] . "' tabindex='-1' aria-labelledby='editUserModalLabel" . $row["id"] . "' aria-hidden='true'>";
                            echo "<div class='modal-dialog modal-dialog-scrollable'>";
                            echo "<div class='modal-content'>";
                            echo "<div class='modal-header'>";
                            echo "<h5 class='modal-title' id='editUserModalLabel" . $row["id"] . "'>Edit User</h5>";
                            echo "<button type='button' class='btn-close' data-dismiss='modal' aria-label='Close'></button>";
                            echo "</div>";
                            echo "<div class='modal-body'>";
                            echo "<form id='editUserForm'>";
                            echo "<div class='mb-3'>";
                            echo "<label for='editName' class='form-label'>Name</label>";
                            echo "<input type='text' class='form-control' id='editName' name='name' required>";
                            echo "</div>";
                            echo "<div class='mb-3'>";
                            echo "<label for='editSurname' class='form-label'>Surname</label>";
                            echo "<input type='text' class='form-control' id='editSurname' name='surname' required>";
                            echo "</div>";
                            echo "<div class='mb-3'>";
                            echo "<label for='editEmail' class='form-label'>Email</label>";
                            echo "<input type='email' class='form-control' id='editEmail' name='email' required>";
                            echo "</div>";
                            echo "<div class='mb-3'>";
                            echo "<label for='editPhone' class='form-label'>Phone</label>";
                            echo "<input type='tel' class='form-control' id='editPhone' name='phone' required>";
                            echo "</div>";
                            echo "<input type='hidden' id='editUserId' name='id'>";
                            echo "<button type='submit' class='btn btn-primary'>Save Changes</button>";
                            echo "</form>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>No users found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
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

      
            $(".edit-user").click(function() {
                var userId = $(this).data("id");
                var name = $(this).closest("tr").find("td:eq(1)").text();
                var surname = $(this).closest("tr").find("td:eq(2)").text();
                var email = $(this).closest("tr").find("td:eq(3)").text();
                var phone = $(this).closest("tr").find("td:eq(4)").text();


                $("#editUserId").val(userId);
                $("#editName").val(name);
                $("#editSurname").val(surname);
                $("#editEmail").val(email);
                $("#editPhone").val(phone);


                $("#editUserModal" + userId).modal("show");
            });

  
            $("#editUserForm").submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.post("edit_user.php", formData, function(data) {
                    if (data === "success") {
                        alert("User updated successfully.");
                    } else {
                        alert("Error while updating user.");
                    }
                    $("#editUserModal" + $("#editUserId").val()).modal("hide");
                });
            });

            $(".delete-user").click(function() {
                var userId = $(this).data("id");

                if (confirm("Are you sure you want to delete this user?")) {
                    $.post("delete_user.php", { id: userId }, function(data) {
                        if (data === "success") {
                            alert("User deleted successfully.");
                        } else {
                            alert("Error while deleting user.");
                        }
                    });
                }
            });
        });
    </script>

</body>
</html>
