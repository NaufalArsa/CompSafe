<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "serviceit";

$connection = new mysqli($hostname, $username, $password, $database);
include("../../app/Controller.php");
if (!isset($_SESSION['login']) || $_SESSION['login'] === false) {
    header("location: ../login.php");
    exit();
}

$controller = new Controller($connection);
if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
}
$currentPassword = '';
$newUsername = '';
$newEmail = '';
$newPassword = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentPassword = isset($_POST['current-password']) ? $_POST['current-password'] : '';
    $newUsername = isset($_POST['new-username']) ? $_POST['new-username'] : '';
    $newEmail = isset($_POST['new-email']) ? $_POST['new-email'] : '';
    $newPassword = isset($_POST['new-password']) ? $_POST['new-password'] : '';

    $controller = new Controller($connection);
    $controller->editProfile($currentPassword, $newUsername, $newEmail, $newPassword);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        body {
            background: linear-gradient(to right, rgba(255, 241, 235, 0.5), rgba(172, 224, 249, 0.5));
        }

        .profile-img {
            max-width: 150px;
            border-radius: 50%;
        }

        .mt-5 {
            margin-top: 5rem;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #090975;
            color: white;
            text-align: center;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container mt-5 pb-4 ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="editProfil.php">

                            <div class="form-group">
                                <label for="new-username">New Username</label>
                                <input type="text" class="form-control" id="new-username" name="new-username" placeholder="Enter new username" value="<?php echo $newUsername; ?>">
                            </div>

                            <div class="form-group">
                                <label for="new-email">New Email</label>
                                <input type="email" class="form-control" id="new-email" name="new-email" placeholder="Enter new email" value="<?php echo $newEmail; ?>">
                            </div>

                            <div class="form-group">
                                <label for="current-password">Current Password</label>
                                <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Enter current password" value="<?php echo $currentPassword; ?>">
                            </div>

                            <div class="form-group">
                                <label for="new-password">New Password</label>
                                <input type="password" class="form-control" id="new-password" name="new-password" placeholder="Enter new password" value="<?php echo $newPassword; ?>">
                            </div>

                            <?php
                            // Tampilkan pesan kesalahan jika ada
                            if (!empty($error_message)) {
                                echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
                            }
                            ?>

                            <div class="container d-flex justify-content-between px-0">
                                <div class="">
                                    <a href="../dashboard.php" class="btn btn-outline-secondary mt-3 float-md-end">Back to Dashboard</a>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-outline-primary mt-3 float-md-end" onclick="">Update Profile</button>
                                </div>
                            </div>
                        </form>
                        <div class="mt-4 pb-2">
                            <a href="../logout.php?act=user" class="w-full text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Log Out</a>
                        </div>    
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Profile updated successfully!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript for success alert -->
    <script>
        $(document).ready(function() {
            $('form').submit(function(e) {
                e.preventDefault();

                var conf = confirm('Are you sure you want to update your profile?');

                if (conf) {
                    $.ajax({
                        type: 'POST',
                        url: 'editProfil.php',
                        data: $('form').serialize(),
                        success: function(response) {
                            showSuccessAlert();
                            setTimeout(function() {
                                window.location.href = '../dashboard.php';
                            }, 2000);
                        },
                        error: function(error) {
                            console.error('Error:', error);
                        }
                    });
                }
            });

            <?php
            if (isset($_SESSION['update_success']) && $_SESSION['update_success']) {
                $_SESSION['update_success'] = false;
            }
            ?>
        });

        function showSuccessAlert() {
            $('#successModal').modal('show');
        }
    </script>
</body>

</html>
