<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Service | PUPBC OSAS</title>
    <link rel="stylesheet" href="css/nav_style.css">
	<link rel="stylesheet" href="css/user_nofi_dd.css">
	<link rel="stylesheet" href="css/user_serv.css">
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
        <div class="top-box top-box-a">
            
        </div>
        <div class="top-box top-box-b">
            
        </div> 
    </section>

	<script src="js/user_noti.js"></script>
</body>
</html>