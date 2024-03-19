<?php
require_once '../header.php';
?>

<div class="container mt-5">
    <h1>Delete Policy from Record</h1>
    <form action="../includes/DeletePolicy-inc.php" method="post">
        <div class="form-group">
            <label for="Policy_no">Policy Number:</label>
            <input type="number" name="Policy_no" id="Policy_no" class="form-control" placeholder="Enter Policy Number" min="100000000" max="999999999" required>
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Delete Policy</button>
    </form>
    <br>
    <div class="alert alert-warning" role="alert">
        <strong>Warning:</strong> This will also delete all payment records associated with this policy number.
    </div>
</div>

<?php
require_once '../footer.php';
?>
