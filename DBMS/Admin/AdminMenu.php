<?php require_once 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-image: url('https://media.istockphoto.com/id/1199060494/photo/insurance-protecting-family-health-live-house-and-car-concept.jpg?s=612x612&w=0&k=20&c=W8bPvwF5rk7Rm2yDYnMyFhGXZfNqK4bUPlDcRpKVsB8='); /* Add your image path here */
            background-size: cover;
            background-repeat: no-repeat;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #007bff; /* Change sidebar background color */
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            display: block;
            color: #fff; /* Change text color */
            font-weight: bold;
        }

        .sidebar a:hover {
            background-color: #0056b3; /* Change hover background color */
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .content h1 {
            color: #007bff; /* Change title color */
        }

        .content p {
            color: #333; /* Change paragraph text color */
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <a href="Admin-Register.php">Add New Admin</a>
        <a href="../Agent/Agent-Register.php">Add New Agent</a>
        <a href="View/ViewAgentList.php">View Agent List</a>
        <a href="View/ViewPolicy.php">View Policy Record</a>
        <a href="Plan/PlanDetails.php">Modify Plan</a>
    </div>

    <div class="content">
        <!-- Content goes here -->
        <h1>Welcome to the Admin Dashboard</h1>
        <p>This is where you can manage your administration tasks.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<?php require_once 'footer.php'; ?>
