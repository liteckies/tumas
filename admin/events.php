 <div class="all_events_outer">
    <div class="all_events">
       <h4 class="wow fadeInRight" data-delay="0.9s">Kindly view upcoming events in the system</h4>
          <?php
          require('layout/header.php');
           include 'includes/config.php';
          $selected = mysql_select_db("tum_asso", $link)
            or die("Unable to connect");

          //execute the SQL query and return records
          $result = mysql_query("SELECT * FROM tumas_events");
          ?> 
		<div class="events_table">
		  <h3>Admin can add events manually here to be seen by Members </h3>
			<table id="example" class="table table-striped table-bordered display">
				<thead class="table_header">
					<tr>
                      <th>Event</th>
                      <th>Venue</th>
                      <th>Date</th>
                      <th>Time </th>
                    </tr>
				</thead>
                <tbody>
				 <?php
                      while( $row = mysql_fetch_events( $result ) ){
                        echo
                        "<tr>
                          <td>{$row['event']}</td>
                          <td>{$row['venue']}</td>
                          <td>{$row['date']}</td>
                          <td>{$row['time']}</td>
                        </tr>";
                      }
                    ?>
                  </tbody>
              </table>
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
 </body>
</html>