<?php
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Menu</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://img.freepik.com/free-photo/family-figure-shape-stethoscope-with-copy-space_23-2148488223.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #007bff;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            display: block;
            color: #fff;
            font-weight: bold;
        }

        .sidebar a:hover {
            background-color: #0056b3;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a href="ManagePolicy/ManagePolicy.php">Manage Policy</a>
        <a href="PolicyOptions/PlanPresentation.php">Plan Presentation</a>
        <a href="PolicyOptions/SearchPolicyDetails.php">Search Policy Details</a>
        <a href="PolicyOptions/CommissionReports.php">Commission Reports</a>
        <a href="PolicyOptions/BusinessReport.php">Business Reports</a>
        <a href="PremiumPaymentRecord/PremiumPaymentRecord.php">Premium Payment Record</a>
    </div>

    <div class="content">
        <h1>Agent Menu</h1>
        <p>Choose an option from the sidebar.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.sidebar-link').click(function (e) {
                e.preventDefault();
                var url = $(this).data('url');
                $('#dynamic-content').load(url);
            });
        });
    </script>

</body>

</html>

<?php
require_once 'footer.php';
?>
