<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUP OSAS Admin Page</title>
    <link rel="stylesheet" href="css/admin_nav_style.css">
    <link rel="stylesheet" href="css/admin_add_sched.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Menu</div>
        <ul class="list-items">
          <li><a href="admin_index.php"><i class="fas fa-chart-area"></i>Overview</a></li>
          <li><a href="admin_clients.php"><i class="fas fa-address-book"></i>Clients</a></li>
          <li><a href="admin_acc.php"><i class="fas fa-user"></i>User</a></li>
          <li><a href="admin_notif.php"><i class="fas fa-bell"></i>Notification</a></li>
          <li><a class="active" href="admin_sched.php"><i class="fas fa-calendar-day"></i>Available Sched</a></li>
        </ul>
      </nav>
    </div>
    <!--<input type="date" id="appoint-date">-->
    <section class="content">
      <h2 class="title">Add Available Schedule</h2>
      <div class="top-box">
      <form id="studentInfo" action="#">
      <h3>Fill up Schedule Info</h3>
      <div class="cont">
        <div class="top-box">
          <div>
				    <h5>Administrator No</h5>
				    <input type="text" id="stud_ID" name="#" placeholder="Student No" readonly>
			    </div>
			    <div>
				    <h5>Administrator Name</h5>
				    <input type="text" id="stud_ID" name="#" placeholder="Admin Full Name" readonly>
			    </div>
			    <div>
				    <h5>Address</h5>
				    <input type="text" id="stud_ID" name="#" placeholder="Course" readonly>
			    </div>
        </div>
        <div class="top-box">
          <div>
				    <h5>Address</h5>
			      <input type="text" id="stud_ID" name="#" placeholder="Address" readonly>
		      </div>
			    <div>
				    <h5>Email Address</h5>
				    <input type="text" id="stud_ID" name="#" placeholder="Email" readonly>
			    </div>
			    <div>
			    	<h5>Contact Number</h5>
				    <input type="text" id="stud_ID" name="#" placeholder="Contact Number" readonly>
			    </div>
        </div> 
		    <div class="top-box-bttn">
			    <a href="#" class="btn" id="bttnEdit">Edit</a>
			    <a href="#" class="btn" id="bttnLogOut">Log Out</a>
		    </div>
		  </div>
      </form>
  </section>

  <!--<script src="js/app_date_time.js"></script>-->
  </body>
</html>
