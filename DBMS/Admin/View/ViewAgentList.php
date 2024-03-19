<?php require_once '../header.php'; ?>
<?php require '../../database.php'; ?>

<div class="container mt-5">
    <h1 class="text-center mb-4">My Agencies List</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Agency Code</th>
                    <th>Branch ID</th>
                    <th>Name</th>
                    <th>Admin ID</th>
                    <th>Mobile Number</th>
                    <th>Email ID</th>
                    <th>Date Of Birth</th>
                    <th>Designation</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $Admin_id = $_SESSION['sessionId2'];
                $sql = "SELECT * FROM Agent WHERE Admin_id = $Admin_id";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['Agency_code'] ?></td>
                            <td><?php echo $row['Branch_id'] ?></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Admin_id'] ?></td>
                            <td><?php echo $row['Mobile_no'] ?></td>
                            <td><?php echo $row['Email_id'] ?></td>
                            <td><?php echo $row['DOB'] ?></td>
                            <td><?php echo $row['Designation'] ?></td>
                            <td><?php echo $row['City'] ?></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='9'>No results found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../footer.php'; ?>
