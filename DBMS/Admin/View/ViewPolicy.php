<?php
require_once '../header.php';
require '../../database.php';
?>

<div class="container mt-5">
    <h1 class="text-center mb-4">View Policy Record</h1>
    <div class="row">
        <div class="col-md-6">
            <form class="mb-4" action="" method="post">
                <div class="form-group">
                    <label for="AgencySearch">Search Agency Wise:</label>
                    <div class="input-group">
                        <input type="search" class="form-control" name="AgencySearch" placeholder="Agency_code">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="search">Search</button>
                        </div>
                    </div>
                </div>
                <button class="btn btn-secondary" type="submit" name="AllPolicy">Show All Policies</button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Policy Number</th>
                    <th>Plan_no</th>
                    <th>Agency_code</th>
                    <th>Premium</th>
                    <th>Date of Commencement</th>
                    <th>Mode</th>
                    <th>Sum Assured</th>
                    <th>First Unpaid Payment</th>
                    <th>Term</th>
                    <th>Premium Paying Term</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $Admin_id = $_SESSION['sessionId2'];
                if (isset($_POST['search'])) {
                    $Value = $_POST['AgencySearch'];
                    $sql = "SELECT * FROM Policy NATURAL JOIN Agent WHERE Admin_id = $Admin_id AND Agency_code = ?";
                    $stmt = mysqli_stmt_init($conn);

                    if (mysqli_stmt_prepare($stmt, $sql)) {
                        mysqli_stmt_bind_param($stmt, "i", $Value);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                    }
                } else {
                    $sql = "SELECT * FROM Policy NATURAL JOIN Agent WHERE Admin_id = $Admin_id";
                    $result = mysqli_query($conn, $sql);
                }

                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['Policy_no'] ?></td>
                            <td><?php echo $row['Plan_no'] ?></td>
                            <td><?php echo $row['Agency_code'] ?></td>
                            <td><?php echo $row['Premium'] ?></td>
                            <td><?php echo $row['DOC'] ?></td>
                            <td><?php echo $row['Mode'] ?></td>
                            <td><?php echo $row['SA'] ?></td>
                            <td><?php echo $row['FUP'] ?></td>
                            <td><?php echo $row['Term'] ?></td>
                            <td><?php echo $row['PPT'] ?></td>
                            <td><?php echo $row['Status'] == 1 ? 'Active' : 'Deactivated'; ?></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='11'>No results found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once '../footer.php'; ?>
