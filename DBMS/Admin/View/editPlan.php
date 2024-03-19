<?php require_once '../header.php'; ?>

<div class="container mt-5">
    <h1>Edit Plan</h1>
    <?php
    require_once '../../database.php';

    $plan_no = $_GET['Plan_no'];
    $name = $_GET['Name'];

    $sql = "SELECT * FROM Plan WHERE Plan_no = $plan_no AND Name = '$name'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        $row = mysqli_fetch_assoc($result);
    ?>
        <form action="../includes/changePlan-inc.php" method="post">
            <input type="hidden" name="Plan_no" value="<?php echo $row['Plan_no'] ?>">
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" name="Name" class="form-control" placeholder="Name" value="<?php echo $row['Name'] ?>" required>
            </div>
            <!-- Add additional form fields here -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="MMA">Maximum Maturity Age:</label>
                        <input type="number" name="MMA" class="form-control" placeholder="Maximum Maturity Age" value="<?php echo $row['MMA'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="min_SA">Minimum Sum Assured:</label>
                        <input type="number" name="min_SA" class="form-control" placeholder="Minimum Sum Assured" value="<?php echo $row['min_SA'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="max_SA">Maximum Sum Assured:</label>
                        <input type="number" name="max_SA" class="form-control" placeholder="Maximum Sum Assured" value="<?php echo $row['max_SA'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="min_age">Minimum Age:</label>
                        <input type="number" name="min_age" class="form-control" placeholder="Minimum Age" value="<?php echo $row['min_age'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="max_age">Maximum Age:</label>
                        <input type="number" name="max_age" class="form-control" placeholder="Maximum Age" value="<?php echo $row['max_age'] ?>" required>
                    </div>
                </div>
            </div>

            <div class="form-check">
                <h7> Mode: </h7><br>
                <input class="form-check-input" type="checkbox" name="Mode_Yearly" id="Mode_Yearly" <?php if ($row['MODE_YEARLY'] == 1) {
                                                                                                            echo 'checked';
                                                                                                        } ?> value="1">
                <label class="form-check-label" for="Mode_Yearly">Yearly</label>

                <input class="form-check-input" type="checkbox" name="Mode_Halfly" id="Mode_Halfly" <?php if ($row['MODE_HALFLY'] == 1) {
                                                                                                            echo 'checked';
                                                                                                        } ?> value="1">
                <label class="form-check-label" for="Mode_Halfly">Halfly</label>

                <input class="form-check-input" type="checkbox" name="Mode_Quartely" id="Mode_Quartely" <?php if ($row['MODE_QUARTELY'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } ?> value="1">
                <label class="form-check-label" for="Mode_Quartely">Quartely</label>

                <input class="form-check-input" type="checkbox" name="Mode_Monthly" id="Mode_Monthly" <?php if ($row['MODE_MONTHLY'] == 1) {
                                                                                                                echo 'checked';
                                                                                                            } ?> value="1">
                <label class="form-check-label" for="Mode_Monthly">Monthly</label>

                <input class="form-check-input" type="checkbox" name="Mode_Single" id="Mode_Single" <?php if ($row['MODE_SINGLE'] == 1) {
                                                                                                            echo 'checked';
                                                                                                        } ?> value="1">
                <label class="form-check-label" for="Mode_Single">Single Premium</label>
            </div>

            <div class="form-group">
                <label for="Type_term">Type of Term:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="Range" name="Type_term" <?php if ($row['Type_term'] == 0) echo 'checked'; ?> value="0">
                    <label class="form-check-label" for="Range">Range</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="Specific" name="Type_term" <?php if ($row['Type_term'] == 1) echo 'checked'; ?> value="1">
                    <label class="form-check-label" for="Specific">Specific</label>
                </div>
            </div>

            <table class="table table-bordered">
                <tr>
                    <td><h7> Term: </h7></td>
                    <td><input type="number" name="T1" class="form-control" value="<?php echo $row['T1'] ?>" required></td>
                    <td><input type="number" name="T2" class="form-control" value="<?php echo $row['T2'] ?>" required></td>
                    <td><input type="number" name="T3" class="form-control" value="<?php echo $row['T3'] ?>"></td>
                    <td><input type="number" name="T4" class="form-control" value="<?php echo $row['T4'] ?>"></td>
                </tr>
                <tr>
                    <td><h7> Premium Paying Term: </h7></td>
                    <td><input type="number" name="P1" class="form-control" value="<?php echo $row['P1'] ?>"></td>
                    <td><input type="number" name="P2" class="form-control" value="<?php echo $row['P2'] ?>"></td>
                    <td><input type="number" name="P3" class="form-control" value="<?php echo $row['P3'] ?>"></td>
                    <td><input type="number" name="P4" class="form-control" value="<?php echo $row['P4'] ?>"></td>
                </tr>
            </table>

            <button type="submit" name="submit" class="btn btn-primary">Update Plan</button>
        </form>
    <?php
    } else {
        header("Location: ../View/ViewPlan.php?error=Plan_Does_Not_Exist");
        exit();
    }
    ?>
</div>

<?php require_once '../footer.php'; ?>
