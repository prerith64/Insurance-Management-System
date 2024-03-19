<?php
require_once '../header.php';
require '../../database.php';
?>

<div class="container">
  <h1 class="text-center">Payment Record Book</h1>
  <div class="table-responsive mt-5">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Policy Number</th>
          <th>Mode</th>
          <th>Date & Time</th>
          <th>Amount</th>
          <th>Next P.D.</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $Agency_code = $_SESSION['sessionId'];
        $sql = "SELECT * FROM policy as p, payment_record as pm WHERE p.Policy_no=pm.Policy_no AND Agency_code = $Agency_code";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?php echo $row['Policy_no'] ?></td>
              <td><?php echo $row['Mode'] ?></td>
              <td><?php echo $row['Date_Time'] ?></td>
              <td><?php echo $row['Amount'] ?></td>
              <td><?php echo $row['FUP'] ?></td>
            </tr>
          <?php
          }
        } else {
          ?>
          <tr>
            <td colspan="5">No results found</td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <div class="text-center mt-4">
    <button class="btn btn-primary"><a href="AddPaymentRecord.php" class="text-white">Add Payment Record</a></button>
  </div>
</div>

<?php
require_once '../footer.php';
?>
