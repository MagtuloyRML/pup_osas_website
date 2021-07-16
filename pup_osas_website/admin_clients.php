<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PUP OSAS Admin Page</title>
    <link rel="stylesheet" href="css/admin_nav_style.css">
    <link rel="stylesheet" href="css/admin_client.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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
          <li><a class="active" href="admin_clients.php"><i class="fas fa-address-book"></i>Clients</a></li>
          <li><a href="admin_acc.php"><i class="fas fa-user"></i>User</a></li>
          <li><a href="admin_notif.php"><i class="fas fa-bell"></i>Notification</a></li>
          <li><a href="admin_sched.php"><i class="fas fa-calendar-day"></i>Available Sched</a></li>
        </ul>
      </nav>
    </div>
    <section class="content">
      <h2>Clients</h2>
      <div class="search_content">
        <form class="search_bar" id="search_bar">
          <input placeholder="Search Client" class="search_client" type="text" id="search_client">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>

      <div class="main__cards">
        <div class="card">
          <form class="profile">
				    <div class="profileStatus">
              <h2>Profile</h2>
              <h3>Student Name</h3>
              <input placeholder="Student Name" class="name_client" type="text" id="name_client" readonly>
              <h3>Student ID</h3>
              <input placeholder="Student ID" class="studID_client" type="text" id="studID_client" readonly>
              <h3>Current Status</h3>
              <input placeholder="Status" class="stats_client" type="text" id="status_client" readonly>
            </div>
          </form>
       	</div>
        <div class="card">
          <canvas id="statusLineChart"></canvas>
        </div>
      </div>
      
      <div class="prev_transan_detls">
        <h3>Appointment Evaluation Info</h3>
        <form class="prev_eval" id="prev_eval">
        <div class="cont">
          <div class="top-box">
            <div>
              <h5>Date</h5>
              <input placeholder="Date" class="prev_date" type="text" id="prev_date" readonly>
            </div>
            <div>
              <h5>Schedule Time</h5>
              <input placeholder="Schedule Time" class="prev_time" type="text" id="prev_time" readonly>
						</div>
            <div>
              <h5>Schedule Status</h5>
              <input placeholder="Schedule Status" class="sched_status" type="text" id="sched_status" readonly>
			      </div>
			      <div>
              <h5>Status</h5>
              <input placeholder="Status" class="client_status" type="text" id="client_status">
			      </div>
          </div>

					<div class="top-box">
            <div>
              <h5>Purpose in Appointment</h5>
							<textarea name="message" placeholder="Purpose of Appointment" readonly></textarea>
			      </div>
						<div>
              <h5>Evaluation in Appointment</h5>
							<textarea name="message" placeholder="Evaluation of Appointment" ></textarea>
			      </div>
            <div>
              <button type="button" class="btn-prv"><i class="fas fa-caret-left"></i></button>
              <button type="button" class="btn-prv"><i class="fas fa-caret-right"></i></button>
              <button type="button" class="btn-prv"><i class="fas fa-caret-left"></i></button>
              <button type="button" class="btn-prv"><i class="fas fa-caret-right"></i></button>
            </div>
          </div>
		    </div>
        </form>
      </div>
      
  </section>

  <script src="js/chart_line.js"></script>
  </body>
</html>
