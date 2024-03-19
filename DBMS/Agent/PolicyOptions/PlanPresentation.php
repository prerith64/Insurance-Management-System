<?php
require_once '../header.php';
require '../../database.php';
?>

<div class="container mt-5">
  <h1>Plan Presentation</h1>
  <div class="table-responsive">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Plan_no</th>
          <th>Name</th>
          <th>MMA</th>
          <th>min_SA</th>
          <th>max_SA</th>
          <th>min_age</th>
          <th>max_age</th>
          <th>MODE</th>
          <th>Term</th>
          <th>PPT</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM Plan";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?php echo $row['Plan_no'] ?></td>
              <td><?php echo $row['Name'] ?></td>
              <td><?php echo $row['MMA'] ?></td>
              <td><?php echo $row['min_SA'] ?></td>
              <td><?php echo $row['max_SA'] ?></td>
              <td><?php echo $row['min_age'] ?></td>
              <td><?php echo $row['max_age'] ?></td>
              <td><?php
                  $modes = [];
                  if ($row['MODE_YEARLY'] == 1) $modes[] = 'Yearly';
                  if ($row['MODE_HALFLY'] == 1) $modes[] = 'Halfly';
                  if ($row['MODE_QUARTELY'] == 1) $modes[] = 'Quartely';
                  if ($row['MODE_MONTHLY'] == 1) $modes[] = 'Monthly';
                  if ($row['MODE_SINGLE'] == 1) $modes[] = 'Single';
                  echo implode(' | ', $modes);
                  ?></td>
              <td><?php echo $row['T1'], "-", $row['T2'], "-", $row['T3'], "-", $row['T4'] ?></td>
              <td><?php echo $row['P1'], "-", $row['P2'], "-", $row['P3'], "-", $row['P4'] ?></td>
            </tr>
        <?php
          }
        } else {
          echo "<tr><td colspan='10'>No results found</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php
require_once '../footer.php';
?>
