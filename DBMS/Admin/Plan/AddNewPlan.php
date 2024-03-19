<?php
require_once '../header.php';
?>

<div class="container mt-5">
    <h1 class="text-center">Add New Plan</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="../includes/AddNewPlan-inc.php" method="post">
                <div class="form-group">
                    <input type="number" class="form-control" name="Plan_no" placeholder="Plan Number (3 digit)" min="100" max="999" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="MMA" placeholder="Maximum Maturity Age" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="min_SA" placeholder="Minimum Sum Assured" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="max_SA" placeholder="Maximum Sum Assured" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="min_age" placeholder="Minimum Age" required>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="max_age" placeholder="Maximum Age" required>
                </div>
                <div class="form-group">
                    <h7>Mode:</h7><br>
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" name="Mode_Yearly" value=1>
                        <label class="form-check-label" for="Mode_Yearly">Yearly</label>
                    </div>
                    <!-- Add other checkboxes similarly -->
                </div>
                <div class="form-group">
                    <h7>Type of Term:</h7><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="Range" name="Type_term" value=0 checked>
                        <label class="form-check-label" for="Range">Range</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="Specific" name="Type_term" value=1>
                        <label class="form-check-label" for="Specific">Specific</label>
                    </div>
                </div>
                <!-- Add table for Term and Premium Paying Term -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Add Plan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once '../footer.php';
?>
