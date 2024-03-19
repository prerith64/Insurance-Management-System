<?php
session_start();
require_once 'C:\xampp\htdocs\Insurance-Management-System\DBMS\database.php';
if (!isset($_SESSION['sessionId'])) {
    if (!($_SERVER['REQUEST_URI'] == '/Insurance-Management-System/DBMS/Agent/Agent-Login.php')) {
        header('Location: http://localhost/Insurance-Management-System/DBMS');
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>IMS Agent <?php echo $_SESSION['sessionUser'], " (", $_SESSION['sessionId'], ")"; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    /* Custom styles */
    .nav-btn {
        padding: 10px 20px;
        background-color: #007bff;
        border: none;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .nav-btn:hover {
        background-color: #0056b3;
    }

    .nav-btn a {
        text-decoration: none;
        color: #fff;
    }

    /* Adjust text color on hover */
    .nav-btn:hover a {
        color: #fff; /* Change text color on hover */
    }
</style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php if (basename($_SERVER['PHP_SELF']) !== 'MainMenu.php') { ?>
                        <li class="nav-item">
                            <button type="button" class="nav-btn">
                                <a href="http://localhost/Insurance-Management-System/DBMS/Agent/MainMenu.php">Agent Menu</a>
                            </button>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <button type="button" class="nav-btn">
                            <a href="http://localhost/Insurance-Management-System/DBMS/index.php">Log out</a>
                        </button>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
