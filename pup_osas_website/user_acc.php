<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>User | PUPBC OSAS</title>
    <link rel="stylesheet" href="css/nav_style.css">
	<link rel="stylesheet" href="css/user_acc.css">
    <link rel="stylesheet" href="css/user_nofi_dd.css">
	<link rel="stylesheet" href="css/logout_modal.css">
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
        <li class="nav_bttn"><a href="user_servi.php">Services</a></li>
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

        <li class="nav_bttn"><a class="active" href="user_acc.php">User</a></li>
    </ul>
    </nav>
	
    <section class="content">
		<form id="studentInfo" action="#">
		<h2>Profile</h2>
		<div class="cont">
        <div class="top-box">
            <div>
				<h5>Student No</h5>
				<input type="text" id="stud_ID" name="#" placeholder="Student No" readonly>
			</div>
			<div>
				<h5>Student Name</h5>
				<input type="text" id="stud_ID" name="#" placeholder="Student Full Name" readonly>
			</div>
			<div>
				<h5>Course</h5>
				<input type="text" id="stud_ID" name="#" placeholder="Course" readonly>
			</div>
			<div>
				<h5>Year</h5>
				<input type="text" id="stud_ID" name="#" placeholder="#" readonly>
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
        		<button type="button" class="btn btn-logout" onclick="location.href='user_login.php';">Yes</button>
			</div>
		</div>
	</div>

	<script src="js/modalLogout.js"></script>
    <script src="js/user_noti.js"></script>
</body>
</html>