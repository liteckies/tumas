<?php
include('session.php');
?>
<?php
require('layout/header.php');
?> 
<body>
<div>
   <div class="panel_main">
      <div class="row">  
          <div class="side_left affix"> 
				 <div class="admin_main">
					<h3>Welcome <?php echo $login_session;?></h3>
				 </div>
				  <div class="add_admin">
				  <i class="fa fa-pencil " ></i> 
				   <a href="#add_admin">Add Admin</a>
				 </div>
				 <div class="view_associates">
				 	<a href="associates.php">View Associates</a>
				 </div>
				  <div class="add_associate">
				 	<a href="#associates_add">Add Associate</a>
				 </div>
				 <div class="add_events">
				 	<a href="#events_add">Add Events</a>
				 </div>
				  <div class="expansion_area">
	             </div>
           </div>
         </div>
	</div>
          <div id="dashboard">
             <div class="welcome_message">
	          <H2>This is the administration area for the TUMCU information management system</H2>
		         <p>You are at liberty to view the already registered associates, search using any 
		         criteria, and also register associates manually without waiting for them to register.
		         </p> 
	         </div>
         </div>

         <div class="add_user">
	            <div id="add_admin">
			         <h3>Kindly add another admin</h3>
			         <hr>
			          <form action="process_newadmin.php" method="POST">
				          <label for username>Username</label>
				          <input type="text" name="username" placeholder="username">
				          <label for password>Password</label>
				          <input type="password" name="password" placeholder="********">
				          <input type="submit" name="submit" value="Add">
			          </form>
			    </div>
	      </div>

		  <t><t>
		  <div class="associates_add">
		  <h3>You can add an associate manually here</h3>
		       <div id="associates_add">
		         <form action="process_registration.php" method="post">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="enter your first name..."required>
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="enter your first name...  "required>
                        <label for="username">Registration number</label>
                        <input type="text" id="phone_number" name="regnumber" placeholder="Your phone number..." required>
                        <label for="username">Year Completed</label>
                        <input type="text" id="year-completed" name="year_completed" placeholder="year completed..." required>
                         <label for="username">Phone</label>
                        <input type="text" id="phone_number" name="phonenumber" placeholder="Your phone number..." required>
                        <label for="username">Ministry Served</label>
                        <input type="text" id="ministry_served" name="ministry" placeholder="which ministry did you serve in?..." required>
                        <button type="submit">REGISTER</button>
                    </form>
		       </div>
		  </div>
		  </t></t>
		  
		  
		  <div class="events_add">
		  <h3><i><font color="grey">You can add an event manually here to be seen by Members<i/></h3>
		       <div id="events_add">
			     <form action="events.php" method="post">
				 <label for="Event">EVENT</label>
                        <input type="text" id="event" name="event" class="form-control" placeholder="enter the event name..."required>
                        <label for="venue">VENUE</label>
                        <input type="text" id="venue" name="venue" placeholder="enter your meeting place here...  "required>
                        <label for="username">DATE</label>
                        <input type="text" id="Date" name="Date" placeholder="Your meeting date..." required>
                        <label for="username">Time</label>
                        <input type="text" id="Time" name="Time" placeholder="Meeting starts at..." required>
						<button type="submit">ADD EVENT</button>
                    </form>
		       </div>
		  </div>
</div>				 
			   
		 
