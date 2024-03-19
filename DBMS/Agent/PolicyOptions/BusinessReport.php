<?php
require_once '../header.php';
require '../../database.php';
$Agency_code = $_SESSION['sessionId'];
?>

<div class="container">
  <h1 class="text-center">Business Reports</h1>

  <form class="text-center" action="" method="post">
    <button type="submit" name="Yearly" class="btn btn-primary">Yearly Report</button>
    <button type="submit" name="Monthly" class="btn btn-primary">Monthly Report</button>
  </form>

  <div class="table-responsive">
    <?php if (isset($_POST['Monthly'])) { ?>
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>Year</th>
            <th>Month</th>
            <th>Total Policies</th>
            <th>Commission</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT MONTH(`DOC`) as M, YEAR(`DOC`) as Y, COUNT(DISTINCT `Policy_no`) as Cnt, SUM(`Premium` * `Term`) as Sm 
                  FROM `policy` 
                  WHERE `Agency_code` = '$Agency_code' 
                  GROUP BY MONTH(`DOC`), YEAR(`DOC`)";
          $result = mysqli_query($conn, $sql);
          $rowCount = mysqli_num_rows($result);
          if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <tr>
                <td><?php echo $row['Y'] ?></td>
                <td><?php echo $row['M'] ?></td>
                <td><?php echo $row['Cnt'] ?></td>
                <td><?php echo $row['Sm'] ?></td>
              </tr>
          <?php
            }
          } else {
            echo '<tr><td colspan="4">No results found</td></tr>';
          }
          ?>
        </tbody>
      </table>
    <?php } else { ?>
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>Year</th>
            <th>Total Policies</th>
            <th>Commission</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT YEAR(`DOC`) as Y, COUNT(DISTINCT `Policy_no`) as Cnt, SUM(`Premium` * `Term`) as Sm 
                  FROM `policy` 
                  WHERE `Agency_code` = '$Agency_code' 
                  GROUP BY YEAR(`DOC`)";
          $result = mysqli_query($conn, $sql);
          $rowCount = mysqli_num_rows($result);
          if ($rowCount > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <tr>
                <td><?php echo $row['Y'] ?></td>
                <td><?php echo $row['Cnt'] ?></td>
                <td><?php echo $row['Sm'] ?></td>
              </tr>
          <?php
            }
          } else {
            echo '<tr><td colspan="3">No results found</td></tr>';
          }
          ?>
        </tbody>
      </table>
    <?php } ?>
  </div>

</div>

<?php
require_once '../footer.php';
?>
