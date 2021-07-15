<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Service | PUPBC OSAS</title>
    <link rel="stylesheet" href="css/nav_style.css">
	<link rel="stylesheet" href="css/user_nofi_dd.css">
	<link rel="stylesheet" href="css/user_serv.css">
	<link rel="stylesheet" href="css/sched_modal_student.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
    <div class="logo">OSAS</div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul class="nav_item">
        <li class="nav_bttn"><a href="user_index.php">Home</a></li>
        <li class="nav_bttn"><a class="active" href="user_servi.php">Services</a></li>
		<li class="nav_bttn1"><a href="user_notif.php">Notification</a></li>
        <li class="nav_bttn2" onclick="toggleNotifi()" ><a href="#">Notification</a></li>

        <div class="notifi-box" id="box">
			<li class="bttn"><a class="btn" href="user_notif.php">See All</a></li>
			<div class="notifi-item">
				<img src="img/avatar1.png" alt="img">
				<div class="text">
				   <h4>Elias Abdurrahman</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="img/avatar2.png" alt="img">
				<div class="text">
				   <h4>John Doe</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="img/avatar3.png" alt="img">
				<div class="text">
				   <h4>Emad Ali</h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>

			<div class="notifi-item">
				<img src="img/avatar4.png" alt="img">
				<div class="text">
				   <h4>Ekram Abu </h4>
				   <p>@lorem ipsum dolor sit amet</p>
			    </div> 
			</div>
		</div>

        <li class="nav_bttn"><a href="user_acc.php">User</a></li>
    </ul>
    </nav>
    <section class="content">
        <h2>Service</h2>
        <div class="main__cards">
		<div class="card">
				<input placeholder="Search Date" class="search_date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="appoint-date" >
        	</div>
        	<div class="card">
				<input class="bttn" type="button" id="bttnAddAppSched" value="Scheduling Appointment" >
       		</div>
        	<div class="card">
				<input class="bttn" type="button" id="bttnEditAppSched" value="Edit Schedule Appointment" >
        	</div>
        </div>
		<div class="app-transac">
          <h2>Transaction Appoinment</h2>
          <table class="app-td-list">
             <tr class="app-title">
               <th>Student Name</th>
               <th>Student Number</th>
               <th>Appointment Date and Time</th>
               <th>Status</th>
             </tr>
             <tr class="app-td-item">
              <td>Student Name</td>
              <td>Student Number</td>
              <td>Date and Time</td>
              <td>Status</td>
            </tr>
          </table>
          </div>
        </div> 
    </section>
	
	<div id="modalAppSched" class="modalAppSched">
    	<div class="modalContent">
        	<div class="modalHeader">
        		<button type="button" class="appCloseBtn" data-dismiss="modal">&times;</button>
        	</div>
        	<form id="schedInfo" action="#">
        		<div class="modalBody">
            		<h3>Appointment Schedule Info</h3>
            		<div class="cont">
              			<div class="top-box">
                			<h5>Select Available Schedule</h5>
                			<div>
                  				<h5>Date</h5>
                  				<input type="date" id="track-appoint-date">
                			</div>
                			<div>
                			<!--mag aapear time pag naclick yun date sa taas-->
                				<h5>Schedule Time</h5>
                				<select name="sched_time" id="sched_time">
                					<option value="#">Start time - End Time</option>
                    				<option value="#">Start time - End Time</option>
                  				</select>
							</div>
			          		<div>
                  				<h5>Identity Status</h5>
                 				<select name="id_status" id="id_status">
                    				<option value="#">Anonymous</option>
                    				<option value="#">Just be Myself</option>
                  				</select>
			          		</div>
							<div>
                  				<h5>Purpose of Appointment</h5>
								<textarea name="message" placeholder="Purpose of Appointment"></textarea>
			          		</div>
              			</div>
		        	</div>
        		</div>
        	</form>
        	<div class="modalFooter">
          		<button type="button" class="btn btn-enter-sched" >Appoint Schedule</button>
          		<button type="button" class="btn btn-cancel-app" data-dismiss="modal">Cancel</button>
        	</div>
      	</div>
    </div>

	<div id="modalAppEditSched" class="modalAppEditSched">
    	<div class="modalContent">
        	<div class="modalHeader">
        		<button type="button" class="appEditCloseBtn" data-dismiss="modal">&times;</button>
        	</div>
        	<form id="schedInfo" action="#">
        		<div class="modalBody">
            		<h3>Appointment Schedule Info</h3>
            		<div class="cont">
              			<div class="top-box">
                			<h5>Edit Appoint Schedule</h5>
                			<div>
                  				<h5>Select Date</h5>
                  				<input type="date" id="track-appoint-date">
                			</div>
                			<div>
                			<!--mag aapear time pag naclick yun date sa taas-->
                				<h5>From Schedule Time</h5>
                				<select name="sched_time" id="sched_time">
                					<option value="#">Start time - End Time</option>
                    				<option value="#">Start time - End Time</option>
                  				</select>
							</div>
			          		<div>
                  				<h5>Identity Status</h5>
                 				<select name="id_status" id="id_status">
                    				<option value="#">Anonymous</option>
                    				<option value="#">Just be Myself</option>
                  				</select>
			          		</div>
              			</div>

						<div class="top-box">
                			<h5>Edit Appoint Schedule</h5>
                			<div>
                  				<h5>Select Date</h5>
                  				<input type="date" id="track-appoint-date">
                			</div>
                			<div>
                			<!--mag aapear time pag naclick yun date sa taas-->
                				<h5>To Schedule Time:</h5>
                				<select name="sched_time" id="sched_time">
                					<option value="#">Start time - End Time</option>
                    				<option value="#">Start time - End Time</option>
                  				</select>
							</div>
							
							<div>
                  				<h5>Purpose of Appointment</h5>
								<textarea name="message" placeholder="Purpose of Appointment"></textarea>
			          		</div>
              			</div>
		        	</div>
        		</div>
        	</form>
        	<div class="modalFooter">
				<button type="button" class="btn btn-del-sched" >Delete Schedule</button>
          		<button type="button" class="btn btn-update-sched" >Update Schedule</button>
          		<button type="button" class="btn btn-cancel-edit" data-dismiss="modal">Cancel</button>
        	</div>
      	</div>
    </div>

	<script src="js/sched_modal_student.js"></script>

	<script src="js/user_noti.js"></script>

</body>
</html>