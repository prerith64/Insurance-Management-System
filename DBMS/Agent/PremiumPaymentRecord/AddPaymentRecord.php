<?php
require_once '../header.php';
?>

<div class="container">
  <h1 class="text-center">Add Payment Record</h1>
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <form action="../includes/AddPaymentRecord-inc.php" method="post">
        <div class="form-group">
          <label for="Policy_no">Policy Number</label>
          <input type="number" name="Policy_no" class="form-control" placeholder="Policy Number (9 digit)" min="100000000" max="999999999">
        </div>
        <div class="form-group">
          <label for="Mode">Mode of Payment</label>
          <select name="Mode" class="form-control" required>
            <option value="" selected disabled>Select Mode of Payment</option>
            <option value="Cash">Cash</option>
            <option value="Other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Amount">Amount</label>
          <input type="number" name="Amount" class="form-control" placeholder="Amount">
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Add Payment Record</button>
      </form>
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <div class="col-md-6">
      <button class="btn btn-secondary btn-block"><a href="ShowRecordBook.php" class="text-white">Show Record Book</a></button>
    </div>
  </div>
</div>

<?php
require_once '../footer.php';
?>
