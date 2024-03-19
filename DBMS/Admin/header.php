<?php
session_start();
require_once 'C:\xampp\htdocs\Insurance-Management-System\DBMS\database.php';
if (!isset($_SESSION['sessionId2'])) {
    if (!($_SERVER['REQUEST_URI'] == '/Insurance-Management-System/DBMS/Admin/Admin-Login.php')) {
        header('Location: http://localhost/Insurance-Management-System/DBMS');
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>IMS Admin <?php echo $_SESSION['sessionUser'], " (", $_SESSION['sessionId2'], ")"; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php if (!($_SERVER['REQUEST_URI'] == '/Insurance-Management-System/DBMS/Admin/AdminMenu.php')) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/Insurance-Management-System/DBMS/Admin/AdminMenu.php">
                                <button type="button" class="btn btn-primary">Admin Menu</button>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Insurance-Management-System/DBMS/index.php">
                            <button type="button" class="btn btn-danger">Log out</button>
                        </a>
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
