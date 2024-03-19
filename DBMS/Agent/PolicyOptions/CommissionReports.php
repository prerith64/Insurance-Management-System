<?php
require_once '../header.php';
require '../../database.php';
?>

<div class="container">
  <h1 class="text-center">My Commission Reports</h1>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Policy Number</th>
          <th>Premium</th>
          <th>Commission</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $Agency_code = $_SESSION['sessionId'];
        $sql = "SELECT `Policy_no`, `Premium`, COM(Premium,Term) AS C FROM `policy` WHERE `Agency_code` = '$Agency_code'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);

        if ($rowCount > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <td><?php echo $row['Policy_no'] ?></td>
              <td><?php echo $row['Premium'] ?></td>
              <td><?php echo $row['C'] ?></td>
            </tr>
        <?php
          }
        } else {
          echo '<tr><td colspan="3">No data available</td></tr>';
        }

        $sql = "SELECT SUM(`C`) AS S FROM (SELECT COM(Premium,Term) AS C FROM `policy` WHERE `Agency_code` = '$Agency_code' ) AS T";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $TotalCommission = $row['S'];
        ?>
      </tbody>
    </table>
  </div>

  <h4 class="text-center">Total Commission: <b><?php echo $TotalCommission; ?></b></h4>
</div>

<?php
require_once '../footer.php';
?>
