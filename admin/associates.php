 <div class="all_associates_outer">
    <div class="all_associates">
       <h4 class="wow fadeInRight" data-delay="0.9s">Kindly view associates in the system</h4>
          <?php
          require('layout/header.php');
           include 'includes/config.php';
          $selected = mysql_select_db("TUMAMS", $link)
            or die("Unable to connect");

          //execute the SQL query and return records
          $result = mysql_query("SELECT * FROM tumas_associates");
          ?>
          <div class="associates_table">
              <table id="example" class="table table-striped table-bordered display">
                  <thead class="table_header">
                    <tr>
                      <th>#id</th>
                      <th>First Name</th>
                      <th>Surname</th>
                      <th>Admin Number </th>
                      <th>Year Completed </th>
                      <th>Phone</th>
                      <th>Ministry</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      while( $row = mysql_fetch_assoc( $result ) ){
                        echo
                        "<tr>
                          <td>{$row['id']}</td>
                          <td>{$row['fname']}</td>
                          <td>{$row['sname']}</td>
                          <td>{$row['reg_number']}</td>
                          <td>{$row['year_completed']}</td>
                          <td>{$row['phone_number']}</td>
                          <td>{$row['ministry']}</td>
                        </tr>";
                      }
                    ?>
                  </tbody>
              </table>
           </div>
        </div>
    </div>
    <script>
     $(document).ready(function() {
    $('#example').DataTable();
      } );
    </script>
     <?php 
        require('layout/footer.php');
      ?>

    <a href="profile.php">Back to admin panel.</a>  