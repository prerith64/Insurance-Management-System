<?php
require_once '../header.php';
require '../../database.php';
?>
<div class="container mt-5">
  <h1>Search Policy Details</h1>
  <div class="row">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="form-group">
          <label for="UserSearch">Search by Name:</label>
          <input type="search" class="form-control" name="UserSearch" placeholder="Holder's Name">
        </div>
        <button type="submit" class="btn btn-primary" name="search">Search</button>
        <br><br>
        <button type="submit" class="btn btn-secondary" name="AllPolicy">Show All Policies</button>
      </form>
    </div>
  </div>
  <div class="mt-5">
    <h2>Search Results</h2>
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>Policy Number</th>
            <th>Plan No</th>
            <th>Agency Code</th>
            <th>Premium</th>
            <th>Date of Commencement</th>
            <th>Mode</th>
            <th>Sum Assured</th>
            <th>First Unpaid Payment</th>
            <th>Term</th>
            <th>Premium Paying Term</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($_POST['search'])) {
              $Value = $_POST['UserSearch'];
              $sql = "SELECT * FROM Policy NATURAL join Policy_holder WHERE Agency_code = ? AND Name = ?";
              $stmt = mysqli_stmt_init($conn);
              if (mysqli_stmt_prepare($stmt, $sql)) {
                  mysqli_stmt_bind_param($stmt, "ss", $_SESSION['sessionId'], $Value);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
              }
          } else {
              $sql = "SELECT * FROM Policy WHERE Agency_code = ?";
              $stmt = mysqli_stmt_init($conn);
              if (mysqli_stmt_prepare($stmt, $sql)) {
                  mysqli_stmt_bind_param($stmt, "s", $_SESSION['sessionId']);
                  mysqli_stmt_execute($stmt);
                  $result = mysqli_stmt_get_result($stmt);
              }
          }
          $rowCount = mysqli_num_rows($result);
          if ($rowCount > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <tr>
                    <td><?php echo $row['Policy_no'] ?></td>
                    <td><?php echo $row['Plan_no'] ?></td>
                    <td><?php echo $row['Agency_code'] ?></td>
                    <td><?php echo $row['Premium'] ?></td>
                    <td><?php echo $row['DOC'] ?></td>
                    <td><?php echo $row['Mode'] ?></td>
                    <td><?php echo $row['SA'] ?></td>
                    <td><?php echo $row['FUP'] ?></td>
                    <td><?php echo $row['Term'] ?></td>
                    <td><?php echo $row['PPT'] ?></td>
                    <td><?php echo ($row['Status'] == 1) ? 'Active' : 'Deactivated'; ?></td>
                  </tr>
              <?php
              }
          } else {
              echo "<tr><td colspan='11'>No results found</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php
require_once '../footer.php';
?>
