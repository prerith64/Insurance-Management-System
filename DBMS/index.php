<?php
session_start();
if (isset($_SESSION['sessionId']) || isset($_SESSION['sessionId2'])) {
    session_unset();
    session_destroy();
    session_set_cookie_params(0);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Insurance Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .navbar-custom {
            background-color: #007bff; /* Change the color as per your preference */
        }

        body {
            background-image: url('data:image/jpeg;base64,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'); /* Add your background image path here */
            background-size: cover;
            background-repeat: no-repeat;
        }

        .insurance-description {
            color: #fff; /* Change text color */
            margin-top: 20px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" href="#">Insurance Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" id="adminModeBtn">Admin Mode</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="agentModeBtn">Agent Mode</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-3" id="adminLoginForm" style="display:none;">
<div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Admin Login</h3>
            <!-- Include your admin login form code here -->
            <form action="Admin/Admin-Login.php" method="post">
                <!-- Your admin login form fields -->
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
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

<div class="container mt-3" id="agentLoginForm" style="display:none;">
<div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Agent Login</h3>
            <!-- Include your agent login form code here -->
            <form action="Agent/Agent-Login.php" method="post">
                <!-- Your agent login form fields -->
                <div class="form-group">
                    <input type="number" class="form-control" name="Agency_code" placeholder="Agency Code" required>
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

<div class="container insurance-description">
    <h1>Welcome to Insurance Management System</h1>
    <h3>This system allows you to manage insurance policies efficiently. You can log in as an administrator to manage system settings and policies or as an agent to handle policy-related tasks.</h3>
    <h3>Explore our range of insurance policies and start managing them today!</h3>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $("#adminModeBtn").click(function() {
            $("#agentLoginForm").hide();
            $("#adminLoginForm").load("Admin/Admin-Login.php");
            $("#adminLoginForm").show();
        });

        $("#agentModeBtn").click(function() {
            $("#adminLoginForm").hide();
            $("#agentLoginForm").load("Agent/Agent-Login.php");
            $("#agentLoginForm").show();
        });
    });
</script>

</body>
</html>
