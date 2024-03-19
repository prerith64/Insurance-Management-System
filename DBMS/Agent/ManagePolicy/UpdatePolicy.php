<?php require_once '../header.php'; ?>
<div class="container">
    <h1 class="mt-4 mb-4">Policy Holder Details</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Policy No</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email ID</th>
                    <th>City</th>
                    <th>Colony</th>
                    <th>House No</th>
                    <th>Pincode</th>
                    <th>Nominee Name</th>
                    <th>Nominee Relation</th>
                    <th>Gender</th>
                    <th>Occupation</th>
                    <th>Date Of Birth</th>
                    <th>Age</th>
                    <th>Educational Qualification</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $Agency_code = $_SESSION['sessionId'];
                $sql = "SELECT * FROM policy_holder NATURAL join policy WHERE Agency_code = $Agency_code";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $url = "Policy_no=" . $row['Policy_no'] . "&Name=" . $row['Name']; ?>
                        <tr>
                            <td><?php echo $row['Policy_no'] ?></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Mobile_no'] ?></td>
                            <td><?php echo $row['Email_id'] ?></td>
                            <td><?php echo $row['City'] ?></td>
                            <td><?php echo $row['Colony'] ?></td>
                            <td><?php echo $row['House_no'] ?></td>
                            <td><?php echo $row['Pincode'] ?></td>
                            <td><?php echo $row['Nominee_name'] ?></td>
                            <td><?php echo $row['Nominee_relation'] ?></td>
                            <td><?php echo $row['Gender'] ?></td>
                            <td><?php echo $row['Occupation'] ?></td>
                            <td><?php echo $row['DOB'] ?></td>
                            <td><?php echo $row['AGE'] ?></td>
                            <td><?php echo $row['Edu_ql'] ?></td>
                            <td class="text-center"><button class="btn btn-primary" onclick="window.open('EditPolicyHolder.php?<?php echo $url ?>','_self')">Edit</button></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='16' class='text-center'>No results found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once '../footer.php'; ?>
