<?php
session_start();
require_once 'C:\xampp\htdocs\Insurance-Management-System\DBMS\database.php';

if (!isset($_SESSION['sessionId2'])) {
    if (!($_SERVER['REQUEST_URI'] == '/Insurance-Management-System/DBMS/Admin/Admin-Login.php')) {
        header('Location: http://localhost/Insurance-Management-System/DBMS');
    }
}
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Insurance Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS for login form */
        .card {
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .form-control {
            border-radius: 10px;
            border-color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
<header>
    <nav>

    </nav>
</header>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Admin Login</h1>
                </div>
                <div class="card-body">
                    <form class="" action="Admin\includes\Admin-Login-inc.php" method="post">
                        <div class="form-group">
                            <input type="number" class="form-control" name="Admin_id" placeholder="Admin ID" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
