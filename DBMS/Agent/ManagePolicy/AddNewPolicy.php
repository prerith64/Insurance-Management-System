<?php require_once '../header.php'; ?>

<div class="container">
    <h1>Add New Policy</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="../includes/AddNewPolicy-inc.php" method="post">
                <div class="form-group">
                    <label for="Policy_no">Policy No.</label>
                    <input type="number" class="form-control" name="Policy_no" placeholder="Policy No. (9 digit)" min="100000000" max="999999999" required>
                </div>
                <div class="form-group">
                    <label for="Plan_no">Plan No.</label>
                    <input type="number" class="form-control" name="Plan_no" placeholder="Plan No. (3 digit)" min="100" max="999" required>
                </div>
                <div class="form-group">
                    <label for="Premium">Premium</label>
                    <input type="number" class="form-control" name="Premium" placeholder="Premium" required>
                </div>
                <div class="form-group">
                    <label for="Term">Term</label>
                    <input type="number" class="form-control" name="Term" placeholder="Term" required>
                </div>
                <div class="form-group">
                    <label for="PPT">Premium Paying Term</label>
                    <input type="number" class="form-control" name="PPT" placeholder="Premium Paying Term">
                </div>
                <div class="form-group">
                    <label for="SA">Sum Assured</label>
                    <input type="number" class="form-control" name="SA" placeholder="Sum Assured" required>
                </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="Age">Policy Holder's Age</label>
                <input type="number" class="form-control" name="Age" placeholder="Policy Holder's Age" required>
            </div>
            <div class="form-group">
                <label for="Mode">Mode</label>
                <select class="form-control" name="Mode" required>
                    <option value="" selected disabled>Select Mode</option>
                    <option value="yearly">Yearly</option>
                    <option value="halfly">Half-Yearly</option>
                    <option value="monthly">Monthly</option>
                    <option value="quartely">Quartely</option>
                    <option value="single premium">Single Premium</option>
                </select>
            </div>
            <div class="form-group">
                <label for="DOC">Date of Commencement</label>
                <input type="date" class="form-control" name="DOC" required>
            </div>
            <div class="form-group">
                <label for="FUP">First Unpaid Payment</label>
                <input type="date" class="form-control" name="FUP">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Add Policy</button>
            </form>
        </div>
    </div>
</div>

<?php require_once '../footer.php'; ?>
