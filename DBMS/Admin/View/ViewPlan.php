<?php
require_once '../header.php';
require '../../database.php';
?>

<div class="container mt-5">
    <h1 class="text-center">Plan Details</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Plan Number</th>
                    <th>Name</th>
                    <th>MMA</th>
                    <th>Min SA</th>
                    <th>Max SA</th>
                    <th>Min Age</th>
                    <th>Max Age</th>
                    <th>Mode</th>
                    <th>Term</th>
                    <th>PPT</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM Plan";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $url = "Plan_no=" . $row['Plan_no'] . "&Name=" . $row['Name'];
                ?>
                        <tr>
                            <td><?php echo $row['Plan_no'] ?></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['MMA'] ?></td>
                            <td><?php echo $row['min_SA'] ?></td>
                            <td><?php echo $row['max_SA'] ?></td>
                            <td><?php echo $row['min_age'] ?></td>
                            <td><?php echo $row['max_age'] ?></td>
                            <td><?php
                                $mode = "";
                                if ($row['MODE_YEARLY'] == 1) $mode .= 'Yearly | ';
                                if ($row['MODE_HALFLY'] == 1) $mode .= 'Halfly | ';
                                if ($row['MODE_QUARTELY'] == 1) $mode .= 'Quartely | ';
                                if ($row['MODE_MONTHLY'] == 1) $mode .= 'Monthly | ';
                                if ($row['MODE_SINGLE'] == 1) $mode .= 'Single';
                                echo rtrim($mode, " | ");
                                ?></td>
                            <td><?php echo $row['T1'] . "-" . $row['T2'] . "-" . $row['T3'] . "-" . $row['T4'] ?></td>
                            <td><?php echo $row['P1'] . "-" . $row['P2'] . "-" . $row['P3'] . "-" . $row['P4'] ?></td>
                            <td style="text-align:center">
                                <button class="btn btn-primary" onclick="window.open('editPlan.php?<?php echo $url ?>','_self')">Edit</button>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                ?>
                    <tr>
                        <td colspan="11" class="text-center">No results found</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once '../footer.php';
?>
