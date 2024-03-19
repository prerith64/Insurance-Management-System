<?php
require_once '../header.php';
require '../../database.php';

$policy_no = $_GET['Policy_no'];
$name = $_GET['Name'];

$sql = "SELECT * FROM Policy_holder WHERE Policy_no = $policy_no AND Name = '$name'";
$result = mysqli_query($conn, $sql);
$rowCount = mysqli_num_rows($result);
if ($rowCount > 0) {
    $row = mysqli_fetch_assoc($result);
?>

    <div class="container mt-5">
        <h1 class="mb-4">Update Policy Holder</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Holder's Details:</h2>
                <form action="../includes/UpdatePolicyHolder-inc.php" method="post">
                    <input type="hidden" name="Policy_no" value="<?php echo $row['Policy_no'] ?>">
                    <div class="form-group">
                        <label for="Name">Name:</label>
                        <input type="text" name="Name" class="form-control" placeholder="Name" value="<?php echo $row['Name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Email_id">E-mail:</label>
                        <input type="email" name="Email_id" class="form-control" placeholder="Email_id" value="<?php echo $row['Email_id'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Mobile_no">Moblie_no:</label>
                        <input type="number" name="Mobile_no" class="form-control" placeholder="Mobile Number" min="5000000000" max="9999999999" value="<?php echo $row['Mobile_no'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="DOB">Date of Birth:</label>
                        <input type="date" name="DOB" class="form-control" placeholder="DOB" value="<?php echo $row['DOB'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="House_no">House No:</label>
                        <input type="text" name="House_no" class="form-control" placeholder="House Number" value="<?php echo $row['House_no'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Colony">Colony:</label>
                        <input type="text" name="Colony" class="form-control" placeholder="Colony" value="<?php echo $row['Colony'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="City">City:</label>
                        <input type="text" name="City" class="form-control" placeholder="City" value="<?php echo $row['City'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Pincode">Pincode:</label>
                        <input type="number" name="Pincode" class="form-control" placeholder="Pincode" value="<?php echo $row['Pincode'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Nominee_name">Nominee Name:</label>
                        <input type="text" name="Nominee_name" class="form-control" placeholder="Nominee Name" value="<?php echo $row['Nominee_name'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Nominee_relation">Nominee Relation:</label>
                        <select name="Nominee_relation" class="form-control" required>
                            <option value="" disabled selected>Select Nominee Relation</option>
                            <option value="Parent" <?php echo ($row['Nominee_relation'] == 'Parent') ? 'selected' : ''; ?>>Parent</option>
                            <option value="Child" <?php echo ($row['Nominee_relation'] == 'Child') ? 'selected' : ''; ?>>Child</option>
                            <option value="Spouse" <?php echo ($row['Nominee_relation'] == 'Spouse') ? 'selected' : ''; ?>>Spouse</option>
                            <option value="Grand child" <?php echo ($row['Nominee_relation'] == 'Grand child') ? 'selected' : ''; ?>>Grand Child</option>
                            <option value="Relative" <?php echo ($row['Nominee_relation'] == 'Relative') ? 'selected' : ''; ?>>Relative</option>
                            <option value="Friend" <?php echo ($row['Nominee_relation'] == 'Friend') ? 'selected' : ''; ?>>Friend</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Gender">Gender:</label>
                        <select name="Gender" class="form-control" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="MALE" <?php echo ($row['Gender'] == 'MALE') ? 'selected' : ''; ?>>Male</option>
                            <option value="FEMALE" <?php echo ($row['Gender'] == 'FEMALE') ? 'selected' : ''; ?>>Female</option>
                            <option value="OTHER" <?php echo ($row['Gender'] == 'OTHER') ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Occupation">Occupation:</label>
                        <input type="text" name="Occupation" class="form-control" placeholder="Occupation" value="<?php echo $row['Occupation'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Edu_ql">Education Qualification:</label>
                        <input type="text" name="Edu_ql" class="form-control" placeholder="Education Qualification" value="<?php echo $row['Edu_ql'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Update Policy Holder Details</button>
                </form>
            </div>
        </div>
    </div>

<?php
} else {
    header("Location: UpdatePolicy.php?error=Policy_Does_Not_Exist");
    exit();
}
require_once '../footer.php';
?>
