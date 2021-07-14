<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUP OSAS Admin Page</title>
    <link rel="stylesheet" href="css/admin_nav_style.css">
    <link rel="stylesheet" href="css/admin_acc.css">
    <link rel="stylesheet" href="css/logout_modal.css">
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
          <li><a class="active" href="admin_acc.php"><i class="fas fa-user"></i>User</a></li>
          <li><a href="admin_notif.php"><i class="fas fa-bell"></i>Notification</a></li>
          <li><a href="admin_sched.php"><i class="fas fa-calendar-day"></i>Available Sched</a></li>
        </ul>
      </nav>
    </div>
    <section class="content">
      <form id="studentInfo" action="#">
      <h2>Profile</h2>
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
    </section>

    <div id="modalLogOut" class="logOutModal">
      <div class="modalContent">
        <div class="modalHeader">
          <button type="button" class="closeBtn" data-dismiss="modal">&times;</button>
        </div>
        <div class="modalBody">
          <h2>Are you sure you want to Log out?</h2>
        </div>
        <div class="modalFooter">
          <button type="button" class="btn btn-cancel" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-logout" onclick="location.href='user_login.html';">Yes</button>
        </div>
      </div>
    </div>
  
    <script src="js/modalLogout.js"></script>
    
  </body>
</html>
